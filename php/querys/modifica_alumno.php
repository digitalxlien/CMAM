<?php
          include("../conexion_db_cmam.php");
          $id_alumno = mb_strtoupper($_POST['id_alumno'],'utf-8');
          $query = "SELECT id_alumno, apellido_paterno, apellido_materno, nombre, sexo, grado, horas_arresto,
      		                 puntos_demerito, fecha_ingreso, fecha_nacimiento, curp, calle, colonia, ciudad, estado,
      		                 codigo_postal, numero_telefono, numero_celular, email, estatura, peso, nacionalidad,
      		                 religion, alergia, tipo_sangre, estatus, foto, rango, modalidad, padre_apellido_paterno,
      		                 padre_apellido_materno, padre_nombre, padre_fecha_nacimiento, padre_calle,
      		                 padre_colonia, padre_ciudad, padre_estado, padre_codigo_postal, padre_numero_telefono,
      		                 padre_numero_celular, padre_email, padre_profesion, madre_apellido_paterno,
                           madre_apellido_materno, madre_nombre, madre_fecha_nacimiento, madre_calle, madre_colonia,
                           madre_ciudad, madre_estado, madre_codigo_postal, madre_numero_telefono,
                           madre_numero_celular, madre_email, madre_profesion
          FROM tbl_alumno
          WHERE id_alumno = '$id_alumno'";
          $result = mysqli_query($conexion, $query);

          /*Almacena los datos en variables*/
        	while($row = mysqli_fetch_array($result)) {
              $id_alumno 							= $row['id_alumno'];
              $nombre                 = $row['nombre'];
        	    $apellido_paterno       = $row['apellido_paterno'];
        	    $apellido_materno       = $row['apellido_materno'];
            	$sexo  									= $row['sexo'];
            	$grado 									= $row['grado'];
            	$horas_arresto   				= $row['horas_arresto'];
            	$puntos_demerito  			= $row['puntos_demerito'];
            	$fecha_ingreso    			= $row['fecha_ingreso'];
            	$fecha_nacimiento 			= $row['fecha_nacimiento'];
              $curp                   = $row['curp'];
            	$calle 					  			= $row['calle'];
            	$colonia 				  			= $row['colonia'];
            	$ciudad 				  			= $row['ciudad'];
            	$estado 				  			= $row['estado'];
            	$codigo_postal 	  			= $row['codigo_postal'];
            	$numero_telefono  			= $row['numero_telefono'];
            	$numero_celular   			= $row['numero_celular'];
            	$email 					  			= $row['email'];
            	$estatura				  			= $row['estatura'];
            	$peso 					 			  = $row['peso'];
            	$nacionalidad						= $row['nacionalidad'];
            	$religion							  = $row['religion'];
            	$alergia 							  = $row['alergia'];
            	$tipo_sangre	   			  = $row['tipo_sangre'];
            	$estatus 				 			  = $row['estatus'];
            	$foto 					 			  = $row['foto'];
            	$rango								  = $row['rango'];
            	$modalidad 			  			= $row['modalidad'];
            	$padre_apellido_paterno = $row['padre_apellido_paterno'];
            	$padre_apellido_materno = $row['padre_apellido_materno'];
            	$padre_nombre 					= $row['padre_nombre'];
            	$padre_fecha_nacimiento = $row['padre_fecha_nacimiento'];
            	$padre_calle						= $row['padre_calle'];
            	$padre_colonia					= $row['padre_colonia'];
            	$padre_ciudad						= $row['padre_ciudad'];
            	$padre_estado						= $row['padre_estado'];
            	$padre_codigo_postal		= $row['padre_codigo_postal'];
            	$padre_numero_telefono	= $row['padre_numero_telefono'];
            	$padre_numero_celular		= $row['padre_numero_celular'];
            	$padre_email						= $row['padre_email'];
            	$padre_profesion				= $row['padre_profesion'];
            	$madre_apellido_paterno	= $row['madre_apellido_paterno'];
            	$madre_apellido_materno = $row['madre_apellido_materno'];
            	$madre_nombre 					= $row['madre_nombre'];
            	$madre_fecha_nacimiento = $row['madre_fecha_nacimiento'];
            	$madre_calle						= $row['madre_calle'];
            	$madre_colonia					= $row['madre_colonia'];
            	$madre_ciudad						= $row['madre_ciudad'];
            	$madre_estado						= $row['madre_estado'];
            	$madre_codigo_postal		= $row['madre_codigo_postal'];
            	$madre_numero_telefono	= $row['madre_numero_telefono'];
            	$madre_numero_celular		= $row['madre_numero_celular'];
            	$madre_email						= $row['madre_email'];
            	$madre_profesion				= $row['madre_profesion'];

              }
?>

<div id="div_frm_registrar">
		<?php
	    /*
	    * Con ese metodo se identifica si se encontro o no
	    * al alumno.
	    * isset() Regresa TRUE si la variable es definida
	    *         Regresa FALSE si la variable es indefinida
	    */
	    if (isset($nombre)) {
	    ?>
			<h2 id="encontrado_h2">Datos generales del alumno</h2><hr>
      <form  method="post" action="../../php/querys/alta_alumno.php" name="frm_registrar_alumno">


        <!-- DATOS DE NUEVO INGRESO ----------------------------------------------------->

        <label class="label_frm">Datos de nuevo ingreso: </label>
        <br /><hr />
        <label class="label_frm">Nivel: </label>
        <select class="input_frm" name="nivel" id="nivel" style="width: 180px;">
          <option value="S">Secundaria</option>
          <option value="B">Bachillerato</option>
        </select>
        <span class="espacio_horizontal_30px"></span>
        <label class="label_frm">Grado: </label>
        <select class="input_frm" name="grado" id="grado" style="width: 190px;">
          <?php
            $ArrayGrado = array('1' => '1° - Primero',
                                '2' => '2° - Segundo',
                                '3' => '3° - Tercero',
                                '4' => '4° - Cuarto',
                                '5' => '5° - Quinto',
                                '6' => '6° - Sexto',
                              );
            foreach( $ArrayGrado as $var => $x ): ?>
            <option value="<?php echo $var ?>"<?php if($var == $grado): ?> selected="selected"<?php endif; ?>><?php echo $x ?></option>
          <?php endforeach; ?>
        </select>
        <span class="espacio_horizontal_30px"></span>
        <label class="label_frm">Grupo: </label>
        <select class="input_frm" name="grupo" id="grupo" style="width: 70px;">
          <option value="01">A</option>
          <option value="02">B</option>
          <option value="03">C</option>
        </select>
        <br />
        <label class="label_frm"/>Los campos con asterísco son obligatorios (*)</label><br />
        <!-- DATOS PRINCIPALES ----------------------------------------------------->

        <label class="label_frm">Datos principales: </label>
        <br /><hr />
        <label class="label_frm" >* Apellido paterno: </label>
        <input id="apellido_paterno" class="input_frm"  type="text"  maxlength="30" name="apellido_paterno" required value="<?php echo $apellido_paterno ?>">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >* Apellido materno: </label>
        <input id="apellido_materno" class="input_frm"  type="text"  maxlength="30" name="apellido_materno" required value="<?php echo $apellido_materno ?>">
        <br />
        <label class="label_frm" >* Nombre(s): </label>
        <input id="nombre" class="input_frm"  type="text"  maxlength="30" name="nombre" required style="width: 260px"; value="<?php echo $nombre ?>">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >Sexo: </label>
        <select id="sexo" class="input_frm" name="sexo" style="width: 150px;">
        <?php
          $ArraySex = array('H' => 'HOMBRE','M' => 'MUJER');
          foreach( $ArraySex as $var => $x ): ?>
          <option value="<?php echo $var ?>"<?php if(strcmp($var, $sexo)): ?> selected="selected"<?php endif; ?>><?php echo $x ?></option>
        <?php endforeach; ?>
        </select>
        <br />
        <label class="label_frm" >* Fecha de nacimiento: </label>

        <!-- Retorna una fecha con formta YYYY-MM-DD -->
        <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" min="1950-01-01" value="2000-01-01" class="input_frm" required value="<?php echo $fecha_nacimiento ?>">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm">* CURP: </label>
        <input id="curp" class="input_frm" required type="text" name="curp" maxlength="18" value="<?php echo $curp?>">
        <br><br>

        <!-- INFORMACIÓN DE CONTACTO ----------------------------------------------------->
        <label class="label_frm">Información de contacto:  </label>
        <br /><hr />
        <label class="label_frm" >* Calle: </label>
        <input class="input_frm"  type="text"  maxlength="30" name="calle" style="width: 350px;" required value="<?php echo $calle?>">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >* Colonia: </label>
        <input class="input_frm"  type="text"  maxlength="30" name="colonia" required value="<?php echo $colonia?>">
        <br />
        <label class="label_frm" >* Ciudad: </label>
        <input class="input_frm"  type="text"  maxlength="30" name="ciudad" required value="<?php echo $ciudad?>">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >* Estado: </label>
        <select id="estado" name="estado" class="input_frm">
        <?php
          $ArrayEstado = array(
          'JALISCO' => 'Jalisco', 'AGUASCALIENTES' => 'Aguascalientes', 'BAJA CALIFORNIA' => 'Baja California',
          'BAJA CALIFORNIA SUR' => 'Baja California Sur', 'CAMPECHE' => 'Campeche',
          'COAHUILA DE ZARAGOZA' => 'Coahuila de Zaragoza', 'COLIMA' => 'Colima', 'CHIAPAS' => 'Chiapas',
          'CHIHUAHUA' => 'Chihuahua', 'DISTRITO FEDERAL' => 'Distrito Federal', 'DURANGO' => 'Durango',
          'GUANAJUATO' => 'Guanajuato', 'GUERRERO' => 'Guerrero', 'HIDALGO' => 'Hidalgo',
          'MÉXICO' => 'México', 'MICHOACÁN DE OCAMPO' => 'Michoacán de Ocampo', 'MORELOS' => 'Morelos',
          'NAYARIT' => 'Nayarit', 'NUEVO LEÓN' => 'Nuevo León', 'OAXACA' => 'Oaxaca', 'PUEBLA' => 'Puebla',
          'QUERÉTARO' => 'Querétaro', 'QUINTANA ROO' => 'Quintana Roo', 'SAN LUIS POTOSÍ' => 'San Luis Potosí',
          'SINALOA' => 'Sinaloa', 'SONORA' => 'Sonora', 'TABASCO' => 'Tabasco', 'TAMAULIPAS' => 'Tamaulipas',
          'TLAXCALA' => 'Tlaxcala', 'VERACRUZ DE IGNACIO DE LA LLAVE' => 'Veracruz de Ignacio de la Llave',
          'YUCATÁN' => 'Yucatán', 'ZACATECAS' => 'Zacatecas');

          foreach( $ArrayEstado as $var => $x ): ?>
          <option value="<?php echo $var ?>"<?php if(strcmp($var, $estado) == 0): ?> selected="selected"<?php endif; ?>><?php echo $x ?></option>
        <?php endforeach; ?>
        </select>
        <br />
        <label class="label_frm">* Código postal: </label>
        <input class="input_frm"  type="text"  maxlength="5" name="codigo_postal" required value="<?php echo $codigo_postal?>">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >Número de teléfono: </label>
        <input class="input_frm"  type="text"  maxlength="15" name="numero_telefono" value="<?php echo $numero_telefono?>">
        <br />
        <label class="label_frm" >Número de celular: </label>
        <input class="input_frm"  type="text"  maxlength="15" name="numero_celular" value="<?php echo $numero_celular?>">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >E-mail: </label>
        <input class="input_frm"  type="email"  maxlength="40" value="@" name="email" style="width: 300px;" value="<?php echo $email?>">
        <br /><br />


        <!-- DATOS VARIOS ----------------------------------------------------->

        <label class="label_frm">Datos varios:  </label>
        <br /><hr />
        <label class="label_frm" > Estatura (m): </label>
        <input class="input_frm"  type="number" min="1.00" max="2.10" name="estatura" step="0.01" style="width: 100px;" value="<?php echo $estatura?>">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" > Peso (kg): </label>
        <input class="input_frm"  type="number" min="30" max="120" name="peso"  style="width: 100px;" value="<?php echo $peso?>">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm">Tipo de sangre: </label>
        <select class="input_frm" name="tipo_sangre" id="tipo_sangre" style="width: 70px;">
          <?php
            $ArraySangre = array('O+' => 'O+', 'O-' => 'O-', 'A+' => 'A+', 'A-' => 'A-', 'AB+' => 'AB+',
                              'AB-' => 'AB-', 'B+' => 'B+', 'B-' => 'B-');
            foreach( $ArraySangre as $var => $x ): ?>
            <option value="<?php echo $var ?>"<?php if($var == $tipo_sangre): ?> selected="selected"<?php endif; ?>><?php echo $x ?></option>
          <?php endforeach; ?>
        </select>
        <br />
        <label class="label_frm" >Nacionalidad: </label>
        <input class="input_frm"  type="text"  maxlength="20" name="input_nacionalidad" value="<?php echo $nacionalidad?>">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm">Religión</label>
        <input class="input_frm"  type="text"  maxlength="30" name="input_religion" value="<?php echo $religion?>">
        </br>
        <label class="label_frm">Tutor: </label>
        <select class="input_frm" name="tutor" id="tutor" style="width: 170px;">
          <?php
            $ArrayTutor = array('P' => 'Padre', 'M' => 'Madre', 'O' => 'Otro');
            foreach( $ArrayTutor as $var => $x ): ?>
            <option value="<?php echo $var ?>"<?php if($var == $tutor): ?> selected="selected"<?php endif; ?>><?php echo $x ?></option>
          <?php endforeach; ?>
          <option value="P">Padre</option>
          <option value="M">Madre</option>
          <option value="O">Otro</option>
        </select>
        <br />
        <label class="label_frm">Foto: </label>
        <input type="file" name="foto" class="input_file_frm" id="foto" accept=".png, .jpeg, .jpg" style="color:#FFF">
        <br />
        <label class="label_frm">Alergias (descripción): </label>
        <br />
        <input class="input_frm"  type="text"  maxlength="25" rows="3" style="width: 500px; height: 60px" name="input_alergia">
        <!-- <input class="input_frm"  type="text" name="alergia" form="frm_registrar_alumno" rows="3"  maxlength="25"  style="width: 500px; height: 60px"> -->
        <br /><br />


        <!-- DATOS DE CONTROL----------------------------------------------------->


        <label class="label_frm">Datos de control:  </label>
        <br /><hr />

        <label class="label_frm">Estatus: </label>
        <select class="input_frm" name="estatus" id="estatus" style="width: 200px;">
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
          <option value="Baja temporal">Baja temporal</option>
          <option value="Expulsado">Expulsado</option>
        </select>
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm">Rango: </label>
        <select class="input_frm" name="rango" id="rango" style="width: 170px;">
          <option value="Cabo">Cabo</option>
          <option value="Cadete 2do.">Cadete 2do.</option>
          <option value="Cadete 1ro.">Cadete 1ro.</option>
          <option value="Sargento 2do.">Sargento 2do.</option>
          <option value="Sargento 1ro">Sargento 1ro.</option>
          <option value="Comandate de unidad">Comandate de unidad</option>
          <option value="Jefe de cadetes">Jefe de cadetes</option>
          <option value="Sub-oficial">Sub-oficial</option>
          <option value="Oficial 2do.">Oficial 2do.</option>
          <option value="Oficial 1ro.">Oficial 1ro.</option>
          <option value="Oficial">Oficial</option>
          <option value="Sin rango">Sin grado</option>
        </select>
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm">Modalidad: </label>
        <select class="input_frm" name="modalidad" id="modalidad" style="width: 170px;">
          <option value="Interno">Interno</option>
          <option value="Externo">Externo</option>
          <option value="Semi-interno">Semi-interno</option>
        </select>
        <br />
        <label class="label_frm" >Horas de arresto: </label>
        <input class="input_frm"  type="number" value="0" min="0" max="500" name="horas_arresto"  style="width: 70px;">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >Horas de demerito: </label>
        <input class="input_frm"  type="number" value="0" min="0" max="500" name="puntos_demerito"  style="width: 70px;">
        <span class="espacio_horizontal_30px "></span>

        <br />

        <label class="label_frm" >Fecha de ingreso: </label>

        <!-- Retorna una fecha con formta YYYY-MM-DD -->
        <input id="fecha_ingreso" type="date" name="fecha_ingreso" min="2000-01-01" value="2010-01-01" class="input_frm">


        <!-- DATOS DEL PADRE---------------------------------------------------->

        <br /><br />
        <label class="label_frm">Datos del Padre (o tutor):  </label>
        <br /><hr />

        <label class="label_frm" >* Apellido paterno del padre: </label>
        <input id="padre_apellido_paterno" class="input_frm"  type="text"  maxlength="30" name="padre_apellido_paterno" required>
        <br	/>
        <label class="label_frm" >* Apellido materno del padre: </label>
        <input id="padre_apellido_materno" class="input_frm"  type="text"  maxlength="30" name="padre_apellido_materno" required >
        <br />
        <label class="label_frm" >* Nombre(s) del padre: </label>
        <input id="padre_nombre" class="input_frm"  type="text"  maxlength="30" name="padre_nombre" required style="width: 260px;">
        <span class="espacio_horizontal_30px "></span>
        <br />
        <label class="label_frm" >Fecha de nacimiento del padre: </label>
        <!-- Retorna una fecha con formta YYYY-MM-DD -->
        <input id="padre_fecha_nacimiento" type="date" name="padre_fecha_nacimiento" min="1940-01-01" value="2000-01-01" class="input_frm" required>
        <br>
        <label class="label_frm" >Calle: </label>
        <input class="input_frm"  type="text"  maxlength="30" name="padre_calle" style="width: 350px;" >
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >Colonia: </label>
        <input class="input_frm"  type="text"  maxlength="30" name="padre_colonia" style="width: 350px;" >
        <br />
        <label class="label_frm" >Ciudad: </label>
        <input class="input_frm"  type="text"  maxlength="30" name="padre_ciudad">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >Estado: </label>
        <select id="estado" name="padre_estado" class="input_frm" >
          <option value="Jalisco">Jalisco</option>
          <option value="Aguascalientes">Aguascalientes</option>
          <option value="Baja California">Baja California</option>
          <option value="Baja California Sur">Baja California Sur</option>
          <option value="Campeche">Campeche</option>
          <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
          <option value="Colima">Colima</option>
          <option value="Chiapas">Chiapas</option>
          <option value="Chihuahua">Chihuahua</option>
          <option value="Distrito Federal">Distrito Federal</option>
          <option value="Durango">Durango</option>
          <option value="Guanajuato">Guanajuato</option>
          <option value="Guerrero">Guerrero</option>
          <option value="Hidalgo">Hidalgo</option>
          <option value="México">México</option>
          <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
          <option value="Morelos">Morelos</option>
          <option value="Nayarit">Nayarit</option>
          <option value="Nuevo León">Nuevo León</option>
          <option value="Oaxaca">Oaxaca</option>
          <option value="Puebla">Puebla</option>
          <option value="Querétaro">Querétaro</option>
          <option value="Quintana Roo">Quintana Roo</option>
          <option value="San Luis Potosí">San Luis Potosí</option>
          <option value="Sinaloa">Sinaloa</option>
          <option value="Sonora">Sonora</option>
          <option value="Tabasco">Tabasco</option>
          <option value="Tamaulipas">Tamaulipas</option>
          <option value="Tlaxcala">Tlaxcala</option>
          <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
          <option value="Yucatán">Yucatán</option>
          <option value="Zacatecas">Zacatecas</option>
        </select>
        <br />
        <label class="label_frm" >Código postal: </label>
        <input class="input_frm"  type="text"  maxlength="8" name="padre_codigo_postal">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >Número de teléfono: </label>
        <input class="input_frm"  type="text"  maxlength="15" name="padre_numero_telefono">
        <br />
        <label class="label_frm" >Número de celular: </label>
        <input class="input_frm"  type="text"  maxlength="15" name="padre_numero_celular">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >E-mail: </label>
        <input class="input_frm"  type="email"  maxlength="40" value="@" name="padre_email" style="width: 300px;"  >
        <br />
        <label class="label_frm" >Profesion: </label>
        <input class="input_frm"  type="text"  maxlength="15" name="padre_profesion">
        <br /><br />



        <!-- DATOS DE LA MADRE---------------------------------------------------->
        <label class="label_frm">Datos de la madre:  </label>
        <br /><hr />
        <label class="label_frm" >* Apellido paterno de la madre: </label>
        <input id="madre_apellido_paterno" class="input_frm"  type="text"  maxlength="30" name="madre_apellido_paterno" required>
        <br	/>
        <label class="label_frm" >* Apellido materno del padre: </label>
        <input id="madre_apellido_materno" class="input_frm"  type="text"  maxlength="30" name="madre_apellido_materno" required >
        <br />
        <label class="label_frm" >* Nombre(s) de la madre: </label>
        <input id="madre_nombre" class="input_frm"  type="text"  maxlength="30" name="madre_nombre" required style="width: 260px;">
        <span class="espacio_horizontal_30px "></span>
        <br />
        <label class="label_frm" >Fecha de nacimiento de la madre: </label>
        <!-- Retorna una fecha con formta YYYY-MM-DD -->
        <input id="madre_fecha_nacimiento" type="date" name="madre_fecha_nacimiento" min="1940-01-01" value="2000-01-01" class="input_frm" required>
        <br>
        <label class="label_frm" >Calle: </label>
        <input class="input_frm"  type="text"  maxlength="30" name="madre_calle" style="width: 350px;" >
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >Colonia: </label>
        <input class="input_frm"  type="text"  maxlength="30" name="madre_colonia" style="width: 350px;" >
        <br />
        <label class="label_frm" >Ciudad: </label>
        <input class="input_frm"  type="text"  maxlength="30" name="madre_ciudad">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >Estado: </label>
        <select id="estado" name="madre_estado" class="input_frm" >
          <option value="Jalisco">Jalisco</option>
          <option value="Aguascalientes">Aguascalientes</option>
          <option value="Baja California">Baja California</option>
          <option value="Baja California Sur">Baja California Sur</option>
          <option value="Campeche">Campeche</option>
          <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
          <option value="Colima">Colima</option>
          <option value="Chiapas">Chiapas</option>
          <option value="Chihuahua">Chihuahua</option>
          <option value="Distrito Federal">Distrito Federal</option>
          <option value="Durango">Durango</option>
          <option value="Guanajuato">Guanajuato</option>
          <option value="Guerrero">Guerrero</option>
          <option value="Hidalgo">Hidalgo</option>
          <option value="México">México</option>
          <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
          <option value="Morelos">Morelos</option>
          <option value="Nayarit">Nayarit</option>
          <option value="Nuevo León">Nuevo León</option>
          <option value="Oaxaca">Oaxaca</option>
          <option value="Puebla">Puebla</option>
          <option value="Querétaro">Querétaro</option>
          <option value="Quintana Roo">Quintana Roo</option>
          <option value="San Luis Potosí">San Luis Potosí</option>
          <option value="Sinaloa">Sinaloa</option>
          <option value="Sonora">Sonora</option>
          <option value="Tabasco">Tabasco</option>
          <option value="Tamaulipas">Tamaulipas</option>
          <option value="Tlaxcala">Tlaxcala</option>
          <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
          <option value="Yucatán">Yucatán</option>
          <option value="Zacatecas">Zacatecas</option>
        </select>
        <br />
        <label class="label_frm" >Código postal: </label>
        <input class="input_frm"  type="text"  maxlength="8" name="madre_codigo_postal">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >Número de teléfono: </label>
        <input class="input_frm"  type="text"  maxlength="15" name="madre_numero_telefono">
        <br />
        <label class="label_frm" >Número de celular: </label>
        <input class="input_frm"  type="text"  maxlength="15" name="madre_numero_celular">
        <span class="espacio_horizontal_30px "></span>
        <label class="label_frm" >E-mail: </label>
        <input class="input_frm"  type="email"  maxlength="40" value="@" name="madre_email" style="width: 300px;"  >
        <br />
        <label class="label_frm" >Profesion: </label>
        <input class="input_frm"  type="text"  maxlength="15" name="madre_profesion">
        <br />
        <hr>
        <br />
        <br />
        <input class="btn_frm_aceptar" type="submit" name="btn_login" value="Registrar" onclick="return validarPassword()">
      </form>

	    <?php } else { ?>
					<div id="div_no_encontrado">
						<h2>No se encontro al alumno</h2>
					</div>
	    <?php  }?>
</div>
