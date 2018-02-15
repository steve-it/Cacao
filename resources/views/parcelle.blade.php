{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('NumParcelle', 'NumParcelle:') !!}
			{!! Form::text('NumParcelle') !!}
		</li>
		<li>
			{!! Form::label('ageparcelle', 'Ageparcelle:') !!}
			{!! Form::text('ageparcelle') !!}
		</li>
		<li>
			{!! Form::label('Superficie_estime', 'Superficie_estime:') !!}
			{!! Form::text('Superficie_estime') !!}
		</li>
		<li>
			{!! Form::label('Superficie_cartographie', 'Superficie_cartographie:') !!}
			{!! Form::text('Superficie_cartographie') !!}
		</li>
		<li>
			{!! Form::label('Date_culture', 'Date_culture:') !!}
			{!! Form::text('Date_culture') !!}
		</li>
		<li>
			{!! Form::label('id_plantation', 'Id_plantation:') !!}
			{!! Form::text('id_plantation') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}