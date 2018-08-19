@foreach ($posts as $post)
	<p>{{ $post->text }}</p>
@endforeach

{{ $posts->links() }}