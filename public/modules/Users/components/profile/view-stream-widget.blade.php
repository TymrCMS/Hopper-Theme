<div class="box box-solid">

	<div class="box-header with-border">
		<h3 class="box-title">My Wall</h3>
	</div>

	<div class="box-body">

		@foreach ($person->posts as $post)

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

		@endforeach

	</div>

</div>