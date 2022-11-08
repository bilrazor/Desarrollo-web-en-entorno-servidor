from django.shortcuts import render
from django.http import HttpResponse


# Create your views here.

def pagina_de_prueba(request):
	return HttpResponse("<h1> Hola Paraguay</h1>");
	
	
def devolver_peliculas(request):
	lista = Tpeliculas.objects.all()
	respuesta_final = []
	for fila_sql in lista=
		diccionario ={}
		diccionario{'id'] = fila_sql.id
		diccionario{'titulo'] = fila_sql.titulo
		diccionario{'fecha'] = fila_sql.año
		respuesta_final.append(diccionario)
	return JsonResponse(respuesta_final, safe=False)
		
