@extends('layout.app2')
@section('content')
<div class="signupform">

    <div class="container">

        <div class="agile_info">
            <div class="w3l_form">
                <div class="left_grid_info">
                    <h3>Welcome !</h3>
                    <h4>Lorem ipsum dolor sit amet, nulla consectetur adipiscing elit Sed.</h4>
                    <p> Nam eleifend velit eget dolor vestibulum ornare. Vestibulum est nulla, fermentum eget euismod et, tincidunt at dui. Nulla tellus nisl, semper id justo vel, rutrum finibus risus. Cras vel auctor odio.</p>
                    <ul class="social_section_1info">
                        <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="w3_pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" class="w3_vimeo"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="w3_info">
                <h2>Apply for Software</h2>
                <p>Vestibulum est nulla, fermentum eget euismod et, tincidunt at dui dolor sit.</p>
                <form action="{{url('/apply/store')}}" method="POST">
                    <div class="input-group">
                        <span><i type="icon" class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" placeholder="Name" required="" name="name">
                    </div>
                    <div class="input-group">
                        <span><i type="icon" class="fa fa-sitemap" aria-hidden="true"></i></span>
                        <input type="text" placeholder="Organisation" required="" name="organization">
                    </div>
                    <div class="input-group">
                        <span><i type="icon" class="fa fa-sitemap" aria-hidden="true"></i></span>
                        <input type="text" placeholder="Designation" required="" name="designation">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group">
                        <span><i type="icon" class="fa fa-envelope" aria-hidden="true"></i></span>
                        <input type="email" placeholder="Email" name="email" required="">
                    </div>
                    <div class="input-group">
                        <span><i type="icon" class="fa fa-phone-square" aria-hidden="true"></i></span>
                        <input type="text" placeholder="Contact number" required="" name="number">
                    </div>
                    <div class="input-group">
                        <span><i type="icon" class="fa fa-server" aria-hidden="true"></i></span>
                        <select type="select" class="custom-select" required="" name="package">
                            <option value="1">Package-1</option>
                            <option value="2">Package-2</option>
                            <option value="3">Package-3</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <textarea type="textarea" class="form-control" id="Textarea" rows="4"  placeholder="Comment" name="comment"></textarea>
                    </div>

                    <div class="input-group-1">
                        <span type="id-proof">ID Proof</span>
                        <div class="tooltip"><b>?</b>
                            <span class="tooltiptext">text</span>
                        </div>
                        <br>
                        <input type="file" name="pic" required="">
                    </div>
                    <button class="btn btn-danger btn-block" type="submit">Apply</button >
                </form>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>
    @endsection