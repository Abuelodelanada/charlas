frutas = ["manzana", "sandia", "pomelo", "mandarina"]
empiezan_con_m = []

for fruta in frutas:
    if fruta.startswith("m"):
        empiezan_con_m.append(fruta)

print(empiezan_con_m)


# Ahora que somos pythonistas...

frutas = ["manzana", "sandia", "pomelo", "mandarina"]
empiezan_con_m = [fruta for fruta in frutas if fruta.startswith("m")]
print(empiezan_con_m)
