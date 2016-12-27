<!DOCTYPE html>
<header>
	<section>
		<ul>
			@foreach ($data["compte"] as $comptes)
			<li>
				<a href="#"> {{ $comptes }} </a>
			</li>
			@endforeach
		</ul>
	</section>
</header>