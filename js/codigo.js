	$(document).ready(function(){

		$("#registrar_facilitador").click(function(e){

			e.preventDefault();

			//variables a enviar

			var nombre = $("#nombre").val();
			var segundo_nombre = $("#segundo_nombre").val();
			var apellido = $("#apellido").val();
			var segundo_apellido = $("#segundo_apellido").val();
			var cedula = parseInt($("#cedula").val());
			var fecha_nacimiento = $("#fecha_nacimiento").val();
			var usuario = $("#usuario").val();
			var password = $("#password").val();
			var foto_perfil = $("#foto_prtfil").val();
			var id_nacionalidad = parseInt($("#id_nacionalidad").val());
			var correo_usuario = $("#correo_usuario").val();
			var direccion = $("#direccion").val();
			var telefono = $("#telefono").val();
			var rif_facilitador = $("#rif_facilitador").val();
			var instituto = $("#instituto").val();
			var titulo = $("#titulo").val();
			var anio = parseInt($("#anio").val());
			var id_tipo = parseInt($("#id_tipo").val());
			var empresa = $("#empresa").val();
			var cargo_desempenado = $("#cargo_desempenado").val();
			var tiempo = $("#tiempo").val();
			var funciones = $("#funciones").val();
			var jefe_inmediato = $("#jefe_inmediato").val();



			$.ajax({
					url: "system/registro_facilitador.php",
					type: "post",
					data: {
						"nombre": nombre,
						"segundo_nombre": segundo_nombre,
						"apellido": apellido,
						"segundo_apellido": segundo_apellido,
						"cedula": cedula,
						"fecha_nacimiento": fecha_nacimiento,
						"usuario": usuario,
						"password": password,
						"foto_perfil": foto_perfil,
						"id_nacionalidad": id_nacionalidad,
						"correo_usuario": correo_usuario,
						"direccion": direccion,
						"telefono": telefono,
						"rif_facilitador": rif_facilitador,
						"instituto": instituto,
						"titulo": titulo,
						"anio": anio,
						"id_tipo": id_tipo,
						"empresa" : empresa,
						"cargo_desempenado" : cargo_desempenado,
						"tiempo" : tiempo,
						"funciones" : funciones,
						"jefe_inmediato" : jefe_inmediato,



					},
					success: function(resp){
						$("#resultado").html(resp);
					},
					error: function(error){
						alert(error);
					}
				});

			});

		$("#registrar_proyecto").click(function(e){

			e.preventDefault();

			//variables a enviar

			var titulo_proyecto = $("#titulo_proyecto").val();
			var descripcion = $("#descripcion").val();
			var id_tipos = parseInt($("#id_tipos").val());

			$.ajax({
					url: "system/registro_proyecto.php",
					type: "post",
					data: {
						"titulo_proyecto": titulo_proyecto,
						"descripcion" : descripcion,
						"id_tipos" : id_tipos,



					},
					success: function(resp){
						$("#resultado").html(resp);
					},
					error: function(error){
						alert(error);
					}
				});

			});

		$("#registrar_empresa").click(function(e){

			e.preventDefault();

			//variables a enviar

			var nombre_empresa = $("#nombre_empresa").val();
			var rif_empresa = $("#rif_empresa").val();
			var direccion_fiscal = $("#direccion_fiscal").val();
			var cantidad_trabajadores = parseInt($("#cantidad_trabajadores").val());
			var nombre_contacto = $("#nombre_contacto").val();
			var apellido_contacto = $("#apellido_contacto").val();
			var telefono_contacto = $("#telefono_contacto").val();
			var correo_contacto = $("#correo_contacto").val();

			$.ajax({
					url: "system/registro_empresa.php",
					type: "post",
					data: {
						"nombre_empresa" : nombre_empresa,
						"rif_empresa" : rif_empresa,
						"direccion_fiscal" : direccion_fiscal,
						"cantidad_trabajadores": cantidad_trabajadores,
						"nombre_contacto" : nombre_contacto,
						"apellido_contacto" : apellido_contacto,
						"telefono_contacto" : telefono_contacto,
						"correo_contacto" : correo_contacto,


					},
					success: function(resp){
						$("#resultado").html(resp);
					},
					error: function(error){
						alert(error);
					}
				});

			});

		$("#registrar_localidad").click(function(e){

			e.preventDefault();

			//variables a enviar

			var localidad = $("#localidad").val();
			var rif_empresa =$("#rif_empresa").val();


			$.ajax({
					url: "system/registro_localidad.php",
					type: "post",
					data: {
						"localidad" : localidad,
						"rif_empresa" : rif_empresa,



					},
					success: function(resp){
						$("#resultado").html(resp);
					},
					error: function(error){
						alert(error);
					}
				});

			});
		$("#modificar_empresa").click(function(e){

			e.preventDefault();

			//variables a enviar

			var nombre_empresa = $("#nombre_empresa1").val();
			var rif_empresa = $("#rif_empresa1").val();
			var direccion_fiscal = $("#direccion_fiscal1").val();
			var cantidad_trabajadores = parseInt($("#cantidad_trabajadores1").val());
			var nombre_contacto = $("#nombre_contacto1").val();
			var apellido_contacto = $("#apellido_contacto1").val();
			var telefono_contacto = $("#telefono_contacto1").val();
			var correo_contacto = $("#correo_contacto1").val();

			$.ajax({
					url: "system/modificar_empresa.php",
					type: "post",
					data: {
						"nombre_empresa" : nombre_empresa,
						"rif_empresa" : rif_empresa,
						"direccion_fiscal" : direccion_fiscal,
						"cantidad_trabajadores": cantidad_trabajadores,
						"nombre_contacto" : nombre_contacto,
						"apellido_contacto" : apellido_contacto,
						"telefono_contacto" : telefono_contacto,
						"correo_contacto" : correo_contacto,


					},
					success: function(resp){
						$("#resultado").html(resp);
					},
					error: function(error){
						alert(error);
					}
				});

			});

		$("#registrar_localidad").click(function(e){

			e.preventDefault();

			//variables a enviar

			var localidad = $("#localidad").val();
			var rif_empresa =$("#rif_empresa").val();


			$.ajax({
					url: "system/registro_localidad.php",
					type: "post",
					data: {
						"localidad" : localidad,
						"rif_empresa" : rif_empresa,



					},
					success: function(resp){
						$("#resultado").html(resp);
					},
					error: function(error){
						alert(error);
					}
				});

			});


		$("#registrar_cargo").click(function(e){

			e.preventDefault();

			//variables a enviar

			var nombre_cargo = $("#nombre_cargo").val();

			$.ajax({
					url: "system/registro_cargos.php",
					type: "post",
					data: {
						"nombre_cargo" : nombre_cargo,




					},
					success: function(resp){
						$("#resultado").html(resp);
					},
					error: function(error){
						alert(error);
					}
				});

			});

			$("#registrar_orden_compra").click(function(e){

			e.preventDefault();

			//variables a enviar

			var orden_compra = $("#orden_compra").val();
			var rif_empresa = $("#rif_empresa").val();

			$.ajax({
					url: "system/registro_orden_compra.php",
					type: "post",
					data: {
						"orden_compra" : orden_compra,
						"rif_empresa" : rif_empresa,




					},
					success: function(resp){
						$("#resultado").html(resp);
					},
					error: function(error){
						alert(error);
					}
				});

			});

			$("#registrar_cliente").click(function(e){

			e.preventDefault();

			//variables a enviar

			var nombre = $("#nombre").val();
			var segundo_nombre = $("#segundo_nombre").val();
			var apellido = $("#apellido").val();
			var segundo_apellido = $("#segundo_apellido").val();
			var cedula = parseInt($("#cedula").val());
			var fecha_nacimiento = $("#fecha_nacimiento").val();
			var usuario = $("#usuario").val();
			var password = $("#password").val();
			var foto_perfil = $("#foto_prtfil").val();
			var id_nacionalidad = parseInt($("#id_nacionalidad").val());
			var correo_usuario = $("#correo_usuario").val();
			var id_cargo =  parseInt($("#id_cargo").val());
			var rif_empresa = $("#rif_empresa").val();



			$.ajax({
					url: "system/registro_clientes.php",
					type: "post",
					data: {
						"nombre": nombre,
						"segundo_nombre": segundo_nombre,
						"apellido": apellido,
						"segundo_apellido": segundo_apellido,
						"cedula": cedula,
						"fecha_nacimiento": fecha_nacimiento,
						"usuario": usuario,
						"password": password,
						"foto_perfil": foto_perfil,
						"id_nacionalidad": id_nacionalidad,
						"correo_usuario": correo_usuario,
						"id_cargo" : id_cargo,
						"rif_empresa" : rif_empresa,



					},
					success: function(resp){
						$("#resultado").html(resp);
					},
					error: function(error){
						alert(error);
					}
				});

			});

			$("#id_empresa").change(function(e){

			e.preventDefault();

			//variables a enviar

			var id_empresa = parseInt($("#id_empresa").val());

			$.ajax({
					url: "system/get_empresas.php",
					type: "post",
					data: {
						"id_empresa" : id_empresa,




					},
					success: function(resp){
						$("#resultado").html(resp);
					},
					error: function(error){
						alert(error);
					}
				});

			});


	});