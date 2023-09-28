@extends('home.layouts.main')
@section('title','Contact-Us')
@section('content')
    <section class="mb-20 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="bg-white p-4 rounded-3xl my-4">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a href="/">خانه</a></li>
                        <li>تماس با ما</li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-white rounded-3xl p-4">
                <div class="p-4">
                    <h3 class="text-xl font-YekanBakh-ExtraBold mb-2">راه های ارتباطی ...</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white border rounded-3xl p-4 flex items-center flex-col text-center gap-4">
                            <div class="bg-yellow-500 p-2 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-base font-YekanBakh-ExtraBold mb-2">ایمیل:</h3>
                                <p>info@tarazoo.com</p>
                            </div>
                        </div>
                        <div class="bg-white border rounded-3xl p-4 flex items-center flex-col text-center gap-4">
                            <div class="bg-yellow-500 p-2 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-base font-YekanBakh-ExtraBold mb-2">آدرس:</h3>
                                <p> تهران، خیابان، کوچه، فرعی 2</p>
                            </div>
                        </div>
                        <div class="bg-white border rounded-3xl p-4 flex items-center flex-col text-center gap-4">
                            <div class="bg-yellow-500 p-2 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-base font-YekanBakh-ExtraBold mb-2">تماس:</h3>
                                <p>038-32221503</p>
                            </div>
                        </div>
                        <div class="bg-white border rounded-3xl p-4 flex items-center flex-col text-center gap-4">
                            <div class="bg-yellow-500 p-2 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </div>
                            <div>
                                <h3 class="text-base font-YekanBakh-ExtraBold mb-2">ساعت کاری:</h3>
                                <p>9 الی 15</p>
                            </div>
                        </div>
                    </div>

                </div>
                <form action="{{route('contactUs.store')}}" method="post">
                    @csrf
                    @include('validation.validation')
                    <div class="p-4">
                        <h3 class="text-xl font-YekanBakh-ExtraBold mb-2">با ما در ارتباط باشید...</h3>
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text-alt">موضوع پیام:</span>
                            </label>
                            <input type="text" name="title" minlength="6" maxlength="10" required class="input input-bordered w-full" />
                            <label class="label">
                                <span class="label-text-alt">پست الکترونیکی:</span>
                            </label>
                            <input type="email" name="email" value="{{auth()->user()->email}}" required class="input input-bordered w-full" />
                            <label class="label">
                                <span class="label-text-alt">متن پیام:</span>
                            </label>
                            <textarea name="body" required class="textarea textarea-bordered h-24" placeholder="متن پیام را بنویسید..."></textarea>
                            <button type="submit" class="btn bg-stone-800 hover:bg-stone-900 text-white my-3">ارسال پیام</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
