import requests
import json
import string
import random

r = requests.post('http://localhost/Prototypes/api/direct_search.php', {"agemin":1,"agemax":10,"region":"idf","city":"cergy","specialization":1,"sex":"male","lang":"fr","formation":"tkt"})
if(r.status_code == 200):
	print (r.headers)
	print (r.content)
else :
	print("Error")
print (r.status_code)