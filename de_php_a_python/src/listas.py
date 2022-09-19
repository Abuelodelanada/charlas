"""."""
lista = ["manzana", "naranja", "sandia"]

print(lista)
print(lista[2])

# Agregar elementos
lista.append("fruitlla")
lista = lista + ["pera", "arándanos"]
print(lista)

# Eliminar elementos
lista.remove("pera")
del lista[0]

# Consumir elemento del final
elemento = lista.pop()

# Consumir elemento del principio
elemento = lista.pop(0)

print(lista)
