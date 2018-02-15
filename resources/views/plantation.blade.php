{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('numplantation', 'Numplantation:') !!}
			{!! Form::text('numplantation') !!}
		</li>
		<li>
			{!! Form::label('idville', 'Idville:') !!}
			{!! Form::text('idville') !!}
		</li>
		<li>
			{!! Form::label('sousvillage', 'Sousvillage:') !!}
			{!! Form::text('sousvillage') !!}
		</li>
		<li>
			{!! Form::label('zoneplantation', 'Zoneplantation:') !!}
			{!! Form::text('zoneplantation') !!}
		</li>
		<li>
			{!! Form::label('nombreparcelle', 'Nombreparcelle:') !!}
			{!! Form::text('nombreparcelle') !!}
		</li>
		<li>
			{!! Form::label('Superficie_estime', 'Superficie_estime:') !!}
			{!! Form::text('Superficie_estime') !!}
		</li>
		<li>
			{!! Form::label('Superficiecartographie', 'Superficiecartographie:') !!}
			{!! Form::text('Superficiecartographie') !!}
		</li>
		<li>
			{!! Form::label('distance_Plantation_Village', 'Distance_Plantation_Village:') !!}
			{!! Form::text('distance_Plantation_Village') !!}
		</li>
		<li>
			{!! Form::label('Age_Plantation', 'Age_Plantation:') !!}
			{!! Form::text('Age_Plantation') !!}
		</li>
		<li>
			{!! Form::label('PeriodeControle', 'PeriodeControle:') !!}
			{!! Form::text('PeriodeControle') !!}
		</li>
		<li>
			{!! Form::label('Superficie_estime1', 'Superficie_estime1:') !!}
			{!! Form::text('Superficie_estime1') !!}
		</li>
		<li>
			{!! Form::label('Nombre_Plants_distribues', 'Nombre_Plants_distribues:') !!}
			{!! Form::text('Nombre_Plants_distribues') !!}
		</li>
		<li>
			{!! Form::label('Superficie_totale_estime', 'Superficie_totale_estime:') !!}
			{!! Form::text('Superficie_totale_estime') !!}
		</li>
		<li>
			{!! Form::label('Cumul_Plants_distribues', 'Cumul_Plants_distribues:') !!}
			{!! Form::text('Cumul_Plants_distribues') !!}
		</li>
		<li>
			{!! Form::label('id_planteur', 'Id_planteur:') !!}
			{!! Form::text('id_planteur') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}