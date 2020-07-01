<div class="box box-solid">

	<div class="box-header with-border">
		<h3 class="box-title">My Wall</h3>
	</div>

	<div class="box-body">

		
		@if ( $user->id == $person->id )
			<form action="{{route('wall.post')}}" method="POST">
				{{ method_field('POST') }}
				{{ csrf_field() }}
				<div class="post">
					<div class="user-block">
						<div class="input-group input-group-sm">
							<textarea name="post_message" class="form-control"></textarea>
							<span class="input-group-btn">
								<button class="btn btn-info btn-flat">Post</button>
							</span>
						</div>
					</div>
				</div>
			</form>
		@endif
		
		<!-- The $person->social comes from the event decorater -->
		@foreach ($person->social->posts as $post)

				<div class="post">

					<div class="user-block">
							<span class="username">
							  <a class="pull-right btn-box-tool" href="#"><i class="fa fa-times"></i></a>
							</span>
					</div>

					 <p>
					 		{{ $post->message }}
					 </p>
					  <ul class="list-inline">
							<li><a class="link-black text-sm" href="#"><i class="fa fa-share margin-r-5"></i> Share</a></li>
							<li class="pull-right">
							  <a class="link-black text-sm" href="#"><i class="fa fa-comments-o margin-r-5"></i> Comments ({{$post->comments()->count()}})</a>
							</li>
					  </ul>
				</div>


				@foreach ($post->comments as $comment)
					<div class="comment" style="background-color:#eee">
						  <div class="user-block">
								{!! Gravatar($comment->author->email) !!}
								<span class="username">
								  <a href="#">{{ $comment->author->display_name }}</a>
								  <a class="pull-right btn-box-tool" href="#"><i class="fa fa-times"></i></a>
								</span>
							<span class="description">Shared publicly - 7:30 PM today</span>
						  </div>
						  <p class="no-padding">
								{{ $comment->message }}
						  </p>						  
					</div>
				@endforeach

			<form action="{{route('wall.comment')}}" method="POST">
					{{ method_field('POST') }}
					{{ csrf_field() }}
					<input type="hidden" name="post_id" value="{{ $post->id }}">
					<div class="reply">
						<div class="input-group input-group-sm">
							<input name="post_comment" class="form-control input-sm" type="text" placeholder="Type a comment">
							<span class="input-group-btn">
								<button class="btn btn-info btn-flat">Post</button>
							</span>
						</div>
					</div>	
			</form>
		@endforeach


	</div>

</div>