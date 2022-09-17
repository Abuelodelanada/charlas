string1 = "Hola Python!"

if string1:
    print(string1)

# Concatenar strings
string2 = "Hola" + " Python!"
print(string2)
print(len(string2))

# Formateo de strings
var1 = "Ñandú"
var2 = "de las Pampas"

print("El %s %s se la banca" % (var1, var2))
print("El {} {} se la banca".format(var1, var2))
print(f"El {var1} {var2} se la banca")

print(var1[0])
