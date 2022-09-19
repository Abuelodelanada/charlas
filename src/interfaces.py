
from typing import Protocol

class Bovino(Protocol):
    def comer(self, comida: str, kilos: int):
        ...

    def caminar(self, velocidad: float, distancia: float):
        ...


class Vaca:
    def comer(self, comida: str, kilos: int):
        print(f"Vaca comiendo {kilos} kilos de {comida}")

    def caminar(self, velocidad: float, distancia: float):
        print(f"Vaca caminando {distancia} Km a {velocidad} Km/h")


class Humano:
    def comer(self, comida: str, kilos: int):
        print(f"Humano comeiendo {kilos} kilos de {comida}")

    def caminar(self, velocidad: float, distancia: float):
        print(f"Humano caminando {distancia} Km a {velocidad} Km/h")


def ingresar_a_campo(animal: Bovino):
    animal.comer("pasto", 5);
    animal.caminar(30.1, 3.2);


vaca = Vaca()
ingresar_a_campo(vaca)
humano = Humano()
ingresar_a_campo(humano)

