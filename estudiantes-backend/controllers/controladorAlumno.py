from flask import Blueprint

# BP = BLUEPRINT
controladorAlumnoBP = Blueprint('controladorAlumno',__name__)

# Ruta para insert
@controladorAlumnoBP.route('/')
def inicio():
    return 'Hola soy el backend alumno'

# Ruta para insert
@controladorAlumnoBP.route('/guardarAlumno',methods=['POST'])
def guardar():
    return 'Se guardo el alumno'

# Ruta para consultar
@controladorAlumnoBP.route('/consultatodo')
def consultatodo():
    return '*Imagina que todo se consulto*'

# Ruta para actualizar
@controladorAlumnoBP.route('/actualizarAlumno',methods=['PUT'])
def actualizar():
    return 'Se actualizo al alumno'

# Ruta para eliminar
@controladorAlumnoBP.route('/eliminarAlumno',methods=['DELETE'])
def eliminar():
    return 'Se elimino el alumno'
