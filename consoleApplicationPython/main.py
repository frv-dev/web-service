import requests

req = requests.get('http://localhost:8080')
produtos = req.json()

for produto in produtos:
    print(produto['id'] + " - " + produto['nome'])
