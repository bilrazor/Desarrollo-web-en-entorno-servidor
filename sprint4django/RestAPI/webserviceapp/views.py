from django.shortcuts import render
from django.http import HttpResponse, JsonResponse
from .models import Tpeliculas

from django.views.decorators.csrf import csrf_exempt
from .models import Tpeliculas, Tcomentarios
import json

# Create your views here.

def pagina_de_prueba(request):
	return HttpResponse("<h1> Hola Paraguay</h1>");
	
	
def devolver_peliculas(request):
	lista = Tpeliculas.objects.all()
	respuesta_final = []
	for fila_sql in lista:
		diccionario ={}
		diccionario['id'] = fila_sql.id
		diccionario['nombre'] = fila_sql.nombre
		diccionario['url_imagen'] = fila_sql.url_imagen
		diccionario['genero'] = fila_sql.genero
		diccionario['año_estreno'] = fila_sql.año_estreno
		respuesta_final.append(diccionario)
	return JsonResponse(respuesta_final, safe=False);
		
def devolver_pelicula_por_id(request, id_solicitado):
	pelicula = Tpeliculas.objects.get(id=id_solicitado)
	comentarios = pelicula.tcomentarios_set.all()
	lista_comentarios = []
	
	for fila_comentario_sql in comentarios:
		diccionario ={}
		diccionario['id'] = fila_comentario_sql.id
		diccionario['comentario'] = fila_comentario_sql.comentario
		
		lista_comentarios.append(diccionario)
	resultado = {
		'id':pelicula.id,
		'nombre':pelicula.nombre,
		'url_imagen':pelicula.url_imagen,
		'genero':pelicula.genero,
		'año_estreno':pelicula.año_estreno,
		'comentarios':lista_comentarios
	}
	return JsonResponse(resultado, json_dumps_params={'ensure_ascii':False});

def guardar_comentario(request, pelicula_id):
    if request.method != 'POST':
            return None

    json_peticion = json.loads(request.body)
    comentario = Tcomentarios()
    comentario.comentario = json_peticion['nuevo_comentario']
    comentario.pelicula = Tpeliculas.objects.get(id = pelicula_id)
    comentario.save()
    return JsonResponse({"status": "ok"})
		
