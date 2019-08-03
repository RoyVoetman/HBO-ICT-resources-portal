@extends('layouts.master')

@section('title', 'Homepage')

@section('container')
    <section class="home">
        <header class="text-center py-5">
            <i class="fas fa-users mb-4"></i>

            <h1>About {{ config('app.name') }}</h1>
        </header>

        <main class="mt-5">
            <div class="row">

                <div class="col-md-12">
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis consequatur dolor
                        dolorem error est minus molestias odit optio totam. A aperiam blanditiis consectetur, esse fuga
                        fugiat perferendis rem sunt!
                    </div>
                    <div>Amet asperiores beatae esse eveniet exercitationem ipsa obcaecati placeat recusandae. Ducimus
                        eos esse est explicabo quidem. Aliquam asperiores, consequuntur deleniti, est excepturi facilis
                        id quasi quidem quos rerum suscipit voluptate!
                    </div>
                    <div>Alias deserunt distinctio, dolorem dolorum eos fugit, iure laborum magni nam quaerat quod sit
                        soluta suscipit tenetur velit! Atque dolores exercitationem impedit incidunt maxime quibusdam
                        ratione reprehenderit, sed tempora voluptatem?
                    </div>
                </div>

            </div>
        </main>
    </section>
@endsection