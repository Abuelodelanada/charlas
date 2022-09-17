def validar_div(func):
    def envoltorio_func(a, b):
        if b == 0:
            print("No podés dividir por 0")
            return
        c = func(a, b)
        return c
    return envoltorio_func

@validar_div
def division(a, b):
    return a / b

division(3, 0)


