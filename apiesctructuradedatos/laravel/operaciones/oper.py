
class inte1:

    def buscar_datos(prueba):
        precio = []
        stock = []
        b=0
        for x in range(len(prueba)):
            valor = prueba[x]
            precio.append(float(valor['precio']))
            stock.append(int(valor['stock']))
            b = b +(precio[x]*stock[x])
        return str(b)

    def min(list):
        lista = []
        b = 0
        for x in range(len(list)):
            valor = list[x]
            lista.append(float(valor['precio']))
        return lista

    def nombre_max(prueba):
        nombre = ""
        valor = prueba[0]
        nombre = (str(valor['nombre']))
        return str(nombre)

    def nombre_min(prueba):
        nombre = ""
        valor = prueba[0]
        nombre = (str(valor['nombre']))
        return str(nombre)

