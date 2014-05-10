<?php 

	$f3 = require('lib/base.php');

  	$f3->set('UI','views/');
  	$f3->set('ESCAPE',FALSE);

    $f3->route('GET /fight','fight');
    $f3->route('GET /fight/@cardnumber','fight');
	$f3->run();

	function fight($f3) {

		$cartodata = json_decode('[{"ciudad":"Málaga","habitantes":568000,"renta":27740,"accesibilidad_y_movilidad_m_100_urbantur_2012":102.5,"zonas_verdes_y_arbolado":9.8,"zonas_forestales":52.1,"emisiones_co2_tm_per_capita":-4.89,"uso_transporte_no_vehiculo_privado":41.3,"concentracion_no2_mg_m3":-22.68,"cartodb_id":10,"pm_2_5_mg_m3":-17},{"ciudad":"Madrid","habitantes":3265000,"renta":36684,"accesibilidad_y_movilidad_m_100_urbantur_2012":158.3,"zonas_verdes_y_arbolado":18.7,"zonas_forestales":38.1,"emisiones_co2_tm_per_capita":-2.25,"uso_transporte_no_vehiculo_privado":74,"concentracion_no2_mg_m3":-44.37,"cartodb_id":1,"pm_2_5_mg_m3":-11},{"ciudad":"Barcelona","habitantes":1615000,"renta":41180,"accesibilidad_y_movilidad_m_100_urbantur_2012":129.8,"zonas_verdes_y_arbolado":14.4,"zonas_forestales":20.3,"emisiones_co2_tm_per_capita":-2.34,"uso_transporte_no_vehiculo_privado":69.4,"concentracion_no2_mg_m3":-46.9,"cartodb_id":2,"pm_2_5_mg_m3":-16},{"ciudad":"Oviedo","habitantes":225390,"renta":23198,"accesibilidad_y_movilidad_m_100_urbantur_2012":88.1,"zonas_verdes_y_arbolado":10.7,"zonas_forestales":45.7,"emisiones_co2_tm_per_capita":-27.51,"uso_transporte_no_vehiculo_privado":44.5,"concentracion_no2_mg_m3":-26.35,"cartodb_id":11,"pm_2_5_mg_m3":-12},{"ciudad":"Valencia","habitantes":798000,"renta":27700,"accesibilidad_y_movilidad_m_100_urbantur_2012":110,"zonas_verdes_y_arbolado":10.5,"zonas_forestales":6.5,"emisiones_co2_tm_per_capita":-4.27,"uso_transporte_no_vehiculo_privado":45.6,"concentracion_no2_mg_m3":-34.88,"cartodb_id":3,"pm_2_5_mg_m3":-14},{"ciudad":"Sevilla","habitantes":703000,"renta":27150,"accesibilidad_y_movilidad_m_100_urbantur_2012":106.2,"zonas_verdes_y_arbolado":6.2,"zonas_forestales":6,"emisiones_co2_tm_per_capita":-4.15,"uso_transporte_no_vehiculo_privado":45,"concentracion_no2_mg_m3":-31.27,"cartodb_id":4,"pm_2_5_mg_m3":-16},{"ciudad":"Santander","habitantes":179920,"renta":31130,"accesibilidad_y_movilidad_m_100_urbantur_2012":90.4,"zonas_verdes_y_arbolado":13.1,"zonas_forestales":4.4,"emisiones_co2_tm_per_capita":-8.35,"uso_transporte_no_vehiculo_privado":35.5,"concentracion_no2_mg_m3":-27.77,"cartodb_id":12,"pm_2_5_mg_m3":-13},{"ciudad":"Alicante","habitantes":334000,"renta":24700,"accesibilidad_y_movilidad_m_100_urbantur_2012":99.1,"zonas_verdes_y_arbolado":10.9,"zonas_forestales":55.2,"emisiones_co2_tm_per_capita":-6.04,"uso_transporte_no_vehiculo_privado":40.2,"concentracion_no2_mg_m3":-23.6,"cartodb_id":5,"pm_2_5_mg_m3":-11},{"ciudad":"Bilbao","habitantes":352700,"renta":35225,"accesibilidad_y_movilidad_m_100_urbantur_2012":96.3,"zonas_verdes_y_arbolado":15.7,"zonas_forestales":39.4,"emisiones_co2_tm_per_capita":-3.15,"uso_transporte_no_vehiculo_privado":58,"concentracion_no2_mg_m3":-35.38,"cartodb_id":6,"pm_2_5_mg_m3":-14},{"ciudad":"Toledo","habitantes":83110,"renta":25857,"accesibilidad_y_movilidad_m_100_urbantur_2012":87.3,"zonas_verdes_y_arbolado":9,"zonas_forestales":41,"emisiones_co2_tm_per_capita":-12.8,"uso_transporte_no_vehiculo_privado":34.6,"concentracion_no2_mg_m3":-23.23,"cartodb_id":13,"pm_2_5_mg_m3":-17},{"ciudad":"Córdoba","habitantes":328650,"renta":18600,"accesibilidad_y_movilidad_m_100_urbantur_2012":102.4,"zonas_verdes_y_arbolado":12.8,"zonas_forestales":22.1,"emisiones_co2_tm_per_capita":-4.82,"uso_transporte_no_vehiculo_privado":38.2,"concentracion_no2_mg_m3":-19.57,"cartodb_id":7,"pm_2_5_mg_m3":-13},{"ciudad":"Gijón","habitantes":277560,"renta":22540,"accesibilidad_y_movilidad_m_100_urbantur_2012":86.2,"zonas_verdes_y_arbolado":16.3,"zonas_forestales":24.6,"emisiones_co2_tm_per_capita":-27.51,"uso_transporte_no_vehiculo_privado":44.7,"concentracion_no2_mg_m3":-32.63,"cartodb_id":8,"pm_2_5_mg_m3":-12},{"ciudad":"Zaragoza","habitantes":674725,"renta":25634,"accesibilidad_y_movilidad_m_100_urbantur_2012":105.2,"zonas_verdes_y_arbolado":7.6,"zonas_forestales":54.2,"emisiones_co2_tm_per_capita":-2.25,"uso_transporte_no_vehiculo_privado":65.3,"concentracion_no2_mg_m3":-31.47,"cartodb_id":14,"pm_2_5_mg_m3":-12},{"ciudad":"A Coruña","habitantes":246000,"renta":25960,"accesibilidad_y_movilidad_m_100_urbantur_2012":91.1,"zonas_verdes_y_arbolado":11.2,"zonas_forestales":31,"emisiones_co2_tm_per_capita":-11.5,"uso_transporte_no_vehiculo_privado":33.9,"concentracion_no2_mg_m3":-25.51,"cartodb_id":9,"pm_2_5_mg_m3":-12}]', true); 		
	
		if (!$f3->exists('PARAMS.cardnumber') || (
			$f3->get('PARAMS.cardnumber') != 3 &&
			$f3->get('PARAMS.cardnumber') != 7 &&
			$f3->get('PARAMS.cardnumber') != 11) ){
			$f3->set('PARAMS.cardnumber',7);
		}

		shuffle($cartodata);
		$cartodata = array_slice ($cartodata, 0, $f3->get('PARAMS.cardnumber'));
		$f3->set('carddata', json_encode($cartodata));

		$template=new Template;
		echo $template->render('fight.html');

	}
