{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('Numformation', 'Numformation:') !!}
			{!! Form::text('Numformation') !!}
		</li>
		<li>
			{!! Form::label('libelle', 'Libelle:') !!}
			{!! Form::text('libelle') !!}
		</li>
		<li>
			{!! Form::label('zone', 'Zone:') !!}
			{!! Form::text('zone') !!}
		</li>
		<li>
			{!! Form::label('souszone', 'Souszone:') !!}
			{!! Form::text('souszone') !!}
		</li>
		<li>
			{!! Form::label('Datecreation', 'Datecreation:') !!}
			{!! Form::text('Datecreation') !!}
		</li>
		<li>
			{!! Form::label('TypeFormation', 'TypeFormation:') !!}
			{!! Form::text('TypeFormation') !!}
		</li>
		<li>
			{!! Form::label('NumChampDeroulerFormation', 'NumChampDeroulerFormation:') !!}
			{!! Form::text('NumChampDeroulerFormation') !!}
		</li>
		<li>
			{!! Form::label('theme', 'Theme:') !!}
			{!! Form::text('theme') !!}
		</li>
		<li>
			{!! Form::label('dirigepar', 'Dirigepar:') !!}
			{!! Form::text('dirigepar') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}