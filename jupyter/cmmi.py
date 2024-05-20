import requests
import json
import pandas as pd
import plotly.express as px


v_headers = {'accept': 'application/json', 'content-type': 'application/x-www-form-urlencoded',
            'cache-control': 'no-cache'}

response = requests.post("http://127.0.0.1:8000/api/login",
                         headers=v_headers,
                         data= {'email':'admin@admin.com', 'password':'password'})
token = response.json()['access_token']
v_headers['Authorization'] = "Bearer " + token

# Vues de l'écosystème
entities = requests.get("http://127.0.0.1:8000/api/entities", headers=v_headers).json()
relations = requests.get("http://127.0.0.1:8000/api/relations", headers=v_headers).json()

# Vue métier du système d'information
macro_processuses = requests.get("http://127.0.0.1:8000/api/macro-processuses", headers=v_headers).json()
processes = requests.get("http://127.0.0.1:8000/api/processes", headers=v_headers).json()
operations = requests.get("http://127.0.0.1:8000/api/operations", headers=v_headers).json()
actors = requests.get("http://127.0.0.1:8000/api/actors", headers=v_headers).json()
activities = requests.get("http://127.0.0.1:8000/api/activities", headers=v_headers).json()
tasks = requests.get("http://127.0.0.1:8000/api/tasks", headers=v_headers).json()
information = requests.get("http://127.0.0.1:8000/api/information", headers=v_headers).json()

# Vue des applications
application_blocks = requests.get("http://127.0.0.1:8000/api/application-blocks", headers=v_headers).json()
applications = requests.get("http://127.0.0.1:8000/api/applications", headers=v_headers).json()
application_modules = requests.get("http://127.0.0.1:8000/api/application-modules", headers=v_headers).json()
application_services = requests.get("http://127.0.0.1:8000/api/application-services", headers=v_headers).json()
databases = requests.get("http://127.0.0.1:8000/api/databases", headers=v_headers).json()
fluxes = requests.get("http://127.0.0.1:8000/api/fluxes", headers=v_headers).json()

# Vue de l'infrastructure logique
networks = requests.get("http://127.0.0.1:8000/api/networks", headers=v_headers).json()
subnetworks = requests.get("http://127.0.0.1:8000/api/subnetworks", headers=v_headers).json()
gateways = requests.get("http://127.0.0.1:8000/api/gateways", headers=v_headers).json()
external_connected_entities = requests.get("http://127.0.0.1:8000/api/external-connected-entities", headers=v_headers).json()
network_switches = requests.get("http://127.0.0.1:8000/api/network-switches", headers=v_headers).json()
routers = requests.get("http://127.0.0.1:8000/api/routers", headers=v_headers).json()
security_devices = requests.get("http://127.0.0.1:8000/api/security-devices", headers=v_headers).json()
dhcp_servers = requests.get("http://127.0.0.1:8000/api/dhcp-servers", headers=v_headers).json()
dnsservers = requests.get("http://127.0.0.1:8000/api/dnsservers", headers=v_headers).json()
clusters = requests.get("http://127.0.0.1:8000/api/clusters", headers=v_headers).json()
logical_servers = requests.get("http://127.0.0.1:8000/api/logical-servers", headers=v_headers).json()
logical_flows = requests.get("http://127.0.0.1:8000/api/logical-flows", headers=v_headers).json()
certificates = requests.get("http://127.0.0.1:8000/api/certificates", headers=v_headers).json()
vlans = requests.get("http://127.0.0.1:8000/api/vlans", headers=v_headers).json()

# Vue de l'infrastructure physique
sites = requests.get("http://127.0.0.1:8000/api/sites", headers=v_headers).json()
buildings = requests.get("http://127.0.0.1:8000/api/buildings", headers=v_headers).json()
bays = requests.get("http://127.0.0.1:8000/api/bays", headers=v_headers).json()
physical_servers = requests.get("http://127.0.0.1:8000/api/physical-servers", headers=v_headers).json()
workstations = requests.get("http://127.0.0.1:8000/api/workstations", headers=v_headers).json()
storage_devices = requests.get("http://127.0.0.1:8000/api/storage-devices", headers=v_headers).json()
peripherals = requests.get("http://127.0.0.1:8000/api/peripherals", headers=v_headers).json()
phones = requests.get("http://127.0.0.1:8000/api/phones", headers=v_headers).json()
physical_switches = requests.get("http://127.0.0.1:8000/api/physical-switches", headers=v_headers).json()
physical_routers = requests.get("http://127.0.0.1:8000/api/physical-routers", headers=v_headers).json()
wifi_terminals = requests.get("http://127.0.0.1:8000/api/wifi-terminals", headers=v_headers).json()
physical_security_devices = requests.get("http://127.0.0.1:8000/api/physical-security-devices", headers=v_headers).json()
wans = requests.get("http://127.0.0.1:8000/api/wans", headers=v_headers).json()
mans = requests.get("http://127.0.0.1:8000/api/mans", headers=v_headers).json()
lans = requests.get("http://127.0.0.1:8000/api/lans", headers=v_headers).json()


# Liste des variables associées à chaque vue
ecosystem_view = [
    entities,
    relations
]
information_systems_view = [
    #macro_processuses,
    processes,
    operations,
    actors,
    activities,
    tasks,
    information
]
applications_view = [
    application_blocks,
    applications,
    application_modules,
    #application_services,
    databases,
    fluxes
]
logical_infrastructure_view = [
    networks,
    subnetworks,
    gateways,
    external_connected_entities,
    #network_switches,
    routers,
    #security_devices,
    dhcp_servers,
    dnsservers,
    #clusters,
    logical_servers,
    #logical_flows,
    certificates,
    vlans
]
physical_infrastructure_view = [
    sites, buildings,
    bays, physical_servers,
    workstations, storage_devices,
    peripherals, phones, physical_switches,
    physical_routers,
    #wifi_terminals,
    physical_security_devices,
    wans,
    mans,
    lans
]

# Liste contenant les éléments par vue
all_variables = [
    entities,
    relations,
    #macro_processuses,
    processes,
    operations,
    actors,
    activities,
    tasks,
    information,
    application_blocks,
    applications,
    application_modules,
    #application_services,
    databases,
    fluxes,
    networks,
    subnetworks,
    gateways,
    external_connected_entities,
    #network_switches,
    routers,
    #security_devices,
    dhcp_servers,
    dnsservers,
    #clusters,
    logical_servers,
    #logical_flows,
    certificates,
    vlans,
    sites, buildings,
    bays, physical_servers,
    workstations, storage_devices,
    peripherals, phones, physical_switches,
    physical_routers,
    #wifi_terminals,
    physical_security_devices,
    wans,
    mans,
    lans
]


def remove_keys_from_dicts(element, keys):
    for dictionary in element:
        if isinstance(dictionary, dict):  # Check if it's a dictionary
            for k in keys:
                dictionary.pop(k, None)


# Define the keys to remove
keys_to_remove = ['updated_at', 'deleted_at', 'created_at']

# Remove keys from each variable
for i in all_variables:
    remove_keys_from_dicts(i, keys_to_remove)

def calculate_element_maturity(element):
    element_maturity_level = 0
    element_number = len(element)
    for i in element:
        max_content_maturity_level = len(i) - 1
        maturity_index = 0
        for a in i:
            id_key = list(i)[0]
            if a is not id_key:
                if i[a]:
                    maturity_index += 1
        avg_maturity_index = maturity_index / max_content_maturity_level
        element_maturity_level += avg_maturity_index
    avg_element_maturity_level = element_maturity_level / element_number * 5
    return avg_element_maturity_level

def calculate_domain_maturity(domain):
    domain_element_number = len(domain)
    domain_maturity_index = 0
    for element in domain:
        try:
            element_maturity_index = calculate_element_maturity(element)
        except ZeroDivisionError:
            element_maturity_index = 0
        domain_maturity_index += element_maturity_index
    avg_domain_maturity_index = round(domain_maturity_index / domain_element_number,2)
    return avg_domain_maturity_index

df = pd.DataFrame({
    'Name':['Current', 'Current', 'Current', 'Current', 'Current', 'Expected', 'Expected', 'Expected', 'Expected', 'Expected'],
    'Maturity': [
        calculate_domain_maturity(ecosystem_view),
        calculate_domain_maturity(information_systems_view),
        calculate_domain_maturity(applications_view),
        calculate_domain_maturity(logical_infrastructure_view),
        calculate_domain_maturity(physical_infrastructure_view),
        4,
        4,
        4,
        4,
        4
    ],
    'Theta':["Ecosystem","Information systems","Applications","Logical infrastructure","Physical infrastructure", "Ecosystem","Information systems","Applications","Logical infrastructure","Physical infrastructure"]
})
fig = px.line_polar(df, r='Maturity', theta='Theta', line_close=True, color='Name')
fig.update_layout(
  polar=dict(
    radialaxis=dict(
      visible=True,
      range=[0, 5]
    )
  )
)
for trace in fig.data:
    if trace.name == 'Current':
        trace.fill = 'toself'
    else:
        trace.fill = None

fig.show()