@extends('home.layouts.main')
@section('title','Contact-Us')
@section('content')
    <section>
        <div class="relative flex justify-center items-center">

            <img class="object-cover lg:h-auto h-60" src="../assets/images/bg-faq.jpg" alt="">

            <div class="form-control w-full max-w-lg absolute p-4 text-center">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl mb-4 text-white">سوال خود را جستجو کنید...</h2>
                <div class="relative">
                    <input type="text" placeholder="تایپ کنید ..." class="input input-bordered w-full max-w-lg placeholder:text-sm" />
                    <button class="btn absolute top-0 left-0 rounded-r-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>

                    </button>
                </div>
            </div>
        </div>

    </section>

    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="collapse collapse-plus bg-base-200 my-4">
                <input type="radio" name="my-accordion-3" checked="checked" />
                <div class="collapse-title text-base font-YekanBakh-ExtraBold">
                    فرم ها را چگونه می توانم دانلود کنم؟
                </div>
                <div class="collapse-content">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="collapse collapse-plus bg-base-200 my-4">
                <input type="radio" name="my-accordion-3" checked="checked" />
                <div class="collapse-title text-base font-YekanBakh-ExtraBold">
                    آیا پس از عضویت نیاز به تایید ایمیل است؟
                </div>
                <div class="collapse-content">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="collapse collapse-plus bg-base-200 my-4">
                <input type="radio" name="my-accordion-3" checked="checked" />
                <div class="collapse-title text-base font-YekanBakh-ExtraBold">
                    چگونه اکانت خود را بازیابی کنیم؟
                </div>
                <div class="collapse-content">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="collapse collapse-plus bg-base-200 my-4">
                <input type="radio" name="my-accordion-3" checked="checked" />
                <div class="collapse-title text-base font-YekanBakh-ExtraBold">
                    آیا برای سفارش خدمات تماس بگیریم؟
                </div>
                <div class="collapse-content">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="collapse collapse-plus bg-base-200 my-4">
                <input type="radio" name="my-accordion-3" checked="checked" />
                <div class="collapse-title text-base font-YekanBakh-ExtraBold">
                    چگونه مشاوره رایگان دریافت کنیم؟
                </div>
                <div class="collapse-content">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>

        </div>

    </section>
@endsection
