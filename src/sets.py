se_algo = {"PHP", "Python", "SQL", "Shell", "QBasic", "Python"}
frameworks_web = {"Python", "PHP", "Java", "Elixir"}

# Intersección
puedo_usar = se_algo.intersection(frameworks_web)
print(puedo_usar)
# >>> {'Python', 'PHP'}

# Unión
todos_los_lenguajes = se_algo.union(frameworks_web)
# todos_los_lenguajes = se_algo | frameworks_web
print(todos_los_lenguajes)
# >>> {'Java', 'QBasic', 'SQL', 'PHP', 'Shell', 'JS', 'Python', 'Elixir'}

# Diferencia
diferencia = se_algo.difference(frameworks_web)
# >>> {'QBasic', 'SQL', 'JS', 'Shell'}
