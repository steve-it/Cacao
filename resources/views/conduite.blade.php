{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_plantation', 'Id_plantation:') !!}
			{!! Form::text('id_plantation') !!}
		</li>
		<li>
			{!! Form::label('dateconduite', 'Dateconduite:') !!}
			{!! Form::text('dateconduite') !!}
		</li>
		<li>
			{!! Form::label('Nombre_Cacaoyers', 'Nombre_Cacaoyers:') !!}
			{!! Form::text('Nombre_Cacaoyers') !!}
		</li>
		<li>
			{!! Form::label('NombreBananiers', 'NombreBananiers:') !!}
			{!! Form::text('NombreBananiers') !!}
		</li>
		<li>
			{!! Form::label('NombreSafoutiers', 'NombreSafoutiers:') !!}
			{!! Form::text('NombreSafoutiers') !!}
		</li>
		<li>
			{!! Form::label('NombreAvocatiers', 'NombreAvocatiers:') !!}
			{!! Form::text('NombreAvocatiers') !!}
		</li>
		<li>
			{!! Form::label('NombreManguiers', 'NombreManguiers:') !!}
			{!! Form::text('NombreManguiers') !!}
		</li>
		<li>
			{!! Form::label('NombreCocotiers', 'NombreCocotiers:') !!}
			{!! Form::text('NombreCocotiers') !!}
		</li>
		<li>
			{!! Form::label('NombreAgrumes', 'NombreAgrumes:') !!}
			{!! Form::text('NombreAgrumes') !!}
		</li>
		<li>
			{!! Form::label('NombreGoyaviers', 'NombreGoyaviers:') !!}
			{!! Form::text('NombreGoyaviers') !!}
		</li>
		<li>
			{!! Form::label('NombrePapayers', 'NombrePapayers:') !!}
			{!! Form::text('NombrePapayers') !!}
		</li>
		<li>
			{!! Form::label('NombreColatiers', 'NombreColatiers:') !!}
			{!! Form::text('NombreColatiers') !!}
		</li>
		<li>
			{!! Form::label('NombrePlantsMorts', 'NombrePlantsMorts:') !!}
			{!! Form::text('NombrePlantsMorts') !!}
		</li>
		<li>
			{!! Form::label('NombrePlantsremplaces', 'NombrePlantsremplaces:') !!}
			{!! Form::text('NombrePlantsremplaces') !!}
		</li>
		<li>
			{!! Form::label('NombrePlantsnon-remplaces', 'NombrePlantsnon-remplaces:') !!}
			{!! Form::text('NombrePlantsnon-remplaces') !!}
		</li>
		<li>
			{!! Form::label('Remplacementmanquants', 'Remplacementmanquants:') !!}
			{!! Form::text('Remplacementmanquants') !!}
		</li>
		<li>
			{!! Form::label('Egourmandage', 'Egourmandage:') !!}
			{!! Form::text('Egourmandage') !!}
		</li>
		<li>
			{!! Form::label('Tailles', 'Tailles:') !!}
			{!! Form::text('Tailles') !!}
		</li>
		<li>
			{!! Form::label('Recoltesanitaire', 'Recoltesanitaire:') !!}
			{!! Form::text('Recoltesanitaire') !!}
		</li>
		<li>
			{!! Form::label('Presenceattaqueinsectes', 'Presenceattaqueinsectes:') !!}
			{!! Form::text('Presenceattaqueinsectes') !!}
		</li>
		<li>
			{!! Form::label('Presencepourriturebrune', 'Presencepourriturebrune:') !!}
			{!! Form::text('Presencepourriturebrune') !!}
		</li>
		<li>
			{!! Form::label('Traitementinsecticide', 'Traitementinsecticide:') !!}
			{!! Form::text('Traitementinsecticide') !!}
		</li>
		<li>
			{!! Form::label('Traitementfongicide', 'Traitementfongicide:') !!}
			{!! Form::text('Traitementfongicide') !!}
		</li>
		<li>
			{!! Form::label('Produitquantiteutilise', 'Produitquantiteutilise:') !!}
			{!! Form::text('Produitquantiteutilise') !!}
		</li>
		<li>
			{!! Form::label('Anneeregeneration', 'Anneeregeneration:') !!}
			{!! Form::text('Anneeregeneration') !!}
		</li>
		<li>
			{!! Form::label('Typeregeneration', 'Typeregeneration:') !!}
			{!! Form::text('Typeregeneration') !!}
		</li>
		<li>
			{!! Form::label('Nombreplantsregeneressemence', 'Nombreplantsregeneressemence:') !!}
			{!! Form::text('Nombreplantsregeneressemence') !!}
		</li>
		<li>
			{!! Form::label('superficiecorrespondante', 'Superficiecorrespondante:') !!}
			{!! Form::text('superficiecorrespondante') !!}
		</li>
		<li>
			{!! Form::label('Originesplantssemence', 'Originesplantssemence:') !!}
			{!! Form::text('Originesplantssemence') !!}
		</li>
		<li>
			{!! Form::label('Varietes', 'Varietes:') !!}
			{!! Form::text('Varietes') !!}
		</li>
		<li>
			{!! Form::label('idpesrsonnel', 'Idpesrsonnel:') !!}
			{!! Form::text('idpesrsonnel') !!}
		</li>
		<li>
			{!! Form::label('observations', 'Observations:') !!}
			{!! Form::textarea('observations') !!}
		</li>
		<li>
			{!! Form::label('recommandations', 'Recommandations:') !!}
			{!! Form::textarea('recommandations') !!}
		</li>
		<li>
			{!! Form::label('NumFiche', 'NumFiche:') !!}
			{!! Form::text('NumFiche') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}