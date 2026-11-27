from flask import Blueprint,request,jsonify
from Models.modelEstudiate import *

# BP = BLUEPRINT
controladorAlumnoBP = Blueprint('controladorAlumno',__name__)

# Ruta para insert
@controladorAlumnoBP.route('/')
def inicio():
    return 'Hola soy el backend alumno'

# Ruta para insert
@controladorAlumnoBP.route('/guardarAlumno',methods=['POST'])
def guardar():
    nombreReq =request.form.get('txtNombre','').strip()
    carreraReq = request.form.get('txtCarrera','').strip()

    try:
        insertEstudiante(nombreReq,carreraReq)
        # Mandamos estado 200 para decir que todo esta bien
        return jsonify({"Completado":"Estudiante Guardado"}),200
    except Exception as e:
        return jsonify({"Error":str(e)}),500

# Ruta para consultar
@controladorAlumnoBP.route('/consultatodo')
def consultatodo():
    try:
        estudiantes = selectAll()
        return jsonify(estudiantes), 200
    except Exception as e:
        return jsonify({"Error": str(e)}), 500

# Ruta para actualizar
@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])
def actualizar():
    idReq = request.form.get('txtId', '').strip()
    nombreReq = request.form.get('txtNombre', '').strip()
    carreraReq = request.form.get('txtCarrera', '').strip()

    if not idReq or not nombreReq or not carreraReq:
        return jsonify({"Error": "Todos los campos son obligatorios"}), 400

    try:
        actualizarEstudiante(idReq, nombreReq, carreraReq)
        return jsonify({
            "Completado": "Estudiante actualizado",
            "nombre": nombreReq,
            "carrera": carreraReq
        }), 200
    except Exception as e:
        return jsonify({"Error": str(e)}), 500

# Ruta para eliminar
@controladorAlumnoBP.route('/eliminarAlumno', methods=['DELETE'])
def eliminar():
    idReq = request.form.get('txtId', '').strip()

    if not idReq:
        return jsonify({"Error": "El ID es obligatorio"}), 400

    try:
        softDeleteEstudiante(idReq)
        return jsonify({"Completado": "Estudiante eliminado"}), 200
    except Exception as e:
        return jsonify({"Error": str(e)}), 500