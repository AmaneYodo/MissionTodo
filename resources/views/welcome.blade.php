<x-common.main>

    <x-slot name="header">
        <x-common.header>
        </x-common.header>
    </x-slot>

    <div class="d-md-flex flex-column flex-md-row vh-100 overflow-auto snap-container">

        <div class="snap-child section-left w-100 w-md-50 bg-success d-flex flex-column align-items-center justify-content-center position-relative">

            <div class="text-center">
                <img src="{{ asset('img/personal-goals-checklist-amico.png') }}" alt="" class="img-fluid w-75 responsive-img mb-3 text-center">
                <h3 class="text-white mb-4">日々のタスクを<br>Mission Todoで管理しよう</h3>
                <h5 class="text-white">操作が簡単だから継続化しやすい</h5>
            </div>
            <div class="scroll">
                <a href="#" class="scroll-down">
                    <div class="circle-arrow"></div>
                </a>
            </div>
            <div class="position-absolute bottom-0 start-50 translate-middle-x py-4 px-3">
                <a class="text-white text-nowrap opacity-25" style="font-size: 0.75rem;" href="https://storyset.com/people">
                    People illustrations by Storyset</a>
            </div>
        </div>

        <div class="snap-child section-right w-100 w-md-50 d-flex flex-column align-items-center justify-content-center">
            <div class="text-center">
                <h2 class="text-success fw-bold mb-4">Start Mission Todo</h2>
                <p class="mb-2">ご入力いただいたメールアドレスでアカウントを作成します</p>
                <p class="mb-5">ご利用は無料です</p>
                <div class="mb-3">
                    <a href="{{ route('register') }}" class="btn  btn-lg btn-success pt-2">アカウントを作成</a>
                </div>
                <div>
                    <span>アカウントをお持ちの方はこちらから</span>
                    <a href="{{ route('login') }}" class="text-success fw-bold">ログイン</a>
                </div>
            </div>
        </div>

    </div>

</x-common.main>
