from fastapi import APIRouter
from config.database import conn
from schemas.user import userEntity, usersEntity
from operaciones.oper import inte1
from operaciones.min import MinHeap,prueba
from operaciones.max import MaxHeap,prueba2

api = APIRouter()

@api.get('/')
def usuario():
    return "Hola esto es nuevo"

@api.get('/datos')
def inicio():
    res = usersEntity(conn.Lab11.productos.find())
    valor = inte1.buscar_datos(res)
    valor1 = inte1.min(res)
    mensaje = prueba.prueba(valor1)
    mensaje1 = prueba2.prueba2(valor1)
    uv1=str(mensaje[0])
    uv2=str(mensaje1[0])
    maximo = usersEntity(conn.Lab11.productos.find({'precio': uv1}))
    nombre1 = inte1.nombre_max(maximo)
    minimo = usersEntity(conn.Lab11.productos.find({'precio': uv2}))
    nombre2 = inte1.nombre_min(minimo)
    return res