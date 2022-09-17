class Madre:
    public = 'Public de Madre'
    _protected = 'Protected de Madre'
    __private = 'Private de Madre'

    def imprime_propiedades(self):
        print(self.public)
        print(self._protected)
        print(self.__private)


class Hija(Madre):
    public = 'Public de Hija'
    _protected = 'Protected de Hija'

    def imprime_propiedades(self):
        print(self.public)
        print(self._protected)
        print(self._Madre__private)


madre = Madre()
print(madre.public)
print(madre._protected)
print(madre._Madre__private)
madre.imprime_propiedades()

hija = Hija()
print(hija.public)
print(hija._protected)
print(hija._Madre__private)
hija.imprime_propiedades()
