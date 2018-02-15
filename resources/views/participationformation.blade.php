{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_planteur', 'Id_planteur:') !!}
			{!! Form::text('id_planteur') !!}
		</li>
		<li>
			{!! Form::label('id_formation', 'Id_formation:') !!}
			{!! Form::text('id_formation') !!}
		</li>
		<li>
			{!! Form::label('dateparticipation', 'Dateparticipation:') !!}
			{!! Form::text('dateparticipation') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}