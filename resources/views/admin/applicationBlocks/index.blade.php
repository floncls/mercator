@extends('layouts.admin')
@section('content')
@can('application_block_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.application-blocks.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.applicationBlock.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.applicationBlock.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ApplicationBlock">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.applicationBlock.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicationBlock.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicationBlock.fields.applications') }}
                        </th>
                        <th>
                            {{ trans('cruds.applicationBlock.fields.responsible') }}
                        </th>
                        <th>
                            {{ trans('cruds.maturity.maturity') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applicationBlocks as $applicationBlock)
                        <tr data-entry-id="{{ $applicationBlock->id }}"
                        @if (($applicationBlock->description==null)||
                            ($applicationBlock->responsible==null)||
                            ($applicationBlock->applications->count()==0)
                            )
                           class="table-warning"
                        @endif
                          >
                            <td>

                            </td>
                            <td>
                                <a href="{{ route('admin.application-blocks.show', $applicationBlock->id) }}">
                                {{ $applicationBlock->name ?? '' }}
                                </a>
                            </td>
                            <td>
                                {!! $applicationBlock->description ?? '' !!}
                            </td>
                            <td>
                                @foreach($applicationBlock->applications as $key => $application)
                                    <span class="label label-info"><a href="/admin/applications/{{ $application->id }}/edit">{{ $application->name }}</a></span>
                                    @if (!$loop->last)
                                    ,
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                {{ $applicationBlock->responsible ?? '' }}
                            </td>
                            <td>
                                {!! $applicationBlock->maturity !!}
                            </td>
                            <td>
                                @can('application_block_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.application-blocks.show', $applicationBlock->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('application_block_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.application-blocks.edit', $applicationBlock->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('application_block_delete')
                                    <form action="{{ route('admin.application-blocks.destroy', $applicationBlock->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('application_block_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.application-blocks.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 100, stateSave: true,
  });
  let table = $('.datatable-ApplicationBlock:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection