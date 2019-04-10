@extends('layouts.two-column')

@section('body')
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('sidebar')

    <address>
        <strong>Hillel</strong><br>
        Odessa, Kanatna 22
    </address>

    <hr>

    <p><i class="far fa-envelope"></i> <a href="mailto:admin@ithillel.ua">admin@ithillel.ua</a></p>
    <p><i class="fas fa-mobile-alt"></i> <a href="phone:+3800000000">+3800000000</a></p>
    <p><i class="fab fa-telegram"></i> <a href="tg:resolve?domain=Hillel">@Hillel</a></p>
@endsection


@section('breadcrumbs')
    @include('breadcrumbs', ['breadcrumbs' => [
        [
            'name' => 'Home',
            'active' => true,
            'route' => 'home'
        ],
        [
            'name' => 'Contacts',
            'active' => false,
            'route' => 'contacts'
        ]
    ]])
@endsection