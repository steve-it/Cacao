{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_appuis', 'Id_appuis:') !!}
			{!! Form::text('id_appuis') !!}
		</li>
		<li>
			{!! Form::label('id_planteur', 'Id_planteur:') !!}
			{!! Form::text('id_planteur') !!}
		</li>
		<li>
			{!! Form::label('datereception', 'Datereception:') !!}
			{!! Form::text('datereception') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}