{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nomville', 'Nomville:') !!}
			{!! Form::text('nomville') !!}
		</li>
		<li>
			{!! Form::label('id_departement', 'Id_departement:') !!}
			{!! Form::text('id_departement') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}