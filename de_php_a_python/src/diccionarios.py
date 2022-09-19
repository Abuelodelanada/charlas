lenguajes = {
    "se_algo": ["PHP", "Python", "JS", "SQL", "Shell", "QBasic"],
    "quisiera_aprender": ["Lisp", "Elixir", "Go", "C++", "C"],
    "vade_retro": ["Java", "C#"]
}

# Agregar elemento
lenguajes["ni_fu_ni_fa"] = ["Rust", "TypeScript"]

# Obtener elemento
print(lenguajes["vade_retro"])

# Eliminar elemento
del lenguajes["ni_fu_ni_fa"]
print(lenguajes)
