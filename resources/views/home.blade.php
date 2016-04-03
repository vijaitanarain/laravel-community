
@include('common.errors')
            <div class="content">
                <form action="{{ route('createsubscription') }}" method="post">
                <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary">Subscribe</button>
                </div>
            </form>
            </div>
