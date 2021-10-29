<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.3/filepond.min.js"
    integrity="sha512-AuMJiyTn/5k+gog21BWPrcoAC+CgOoobePSRqwsOyCSPo3Zj64eHyOsqDev8Yn9H45WUJmzbe9RaLTdFKkO0KQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.3/filepond.css"
    integrity="sha512-lA1v3OiAORI4FvglHuwPns240yxZFQiirFBS+93lmHG9v8qzAjHhlC69Ba/B/GlJKIfkBbp2NzfaQM25t1vVKg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.3/filepond.esm.js"
    integrity="sha512-XbMGV/sHCm8UAQYQRUKSTimnE5WjqvBC2C6OnbAEQqy7pFuX3Je+CrUCavwWJlEi8FOEkkVgqWi78jgpR/0PNA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.3/filepond.esm.min.js"
    integrity="sha512-LmKBe0CfdQBg2m77wKzS/K/xO+TIKDmBYGqM6L6IKBovbZ5ns71DU9QoPSQ526PRsqWcCeXKusMt04xEAfZfLg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.3/filepond.js"
    integrity="sha512-v6/Pv0rkeNFENOwv7dYFC0nidwx0omSRD2pEL+hCBZ3Zl0v6cRJwd2aC0SiHp2AkyzYPE1y8l6UVC3w/bIEXjA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.3/filepond.min.css"
    integrity="sha512-Zgp/CdUqOMnAY0ReSgoyZ2rk7CBVP0TqF+nTxDRo/mS0WEfQ+GOAaQDgHemhvd/C4rNrACYF/wyDqEYxhSN9dQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/buttons-design.css')}}">

</head>
<x-app-layout>
    <x-slot name="header">

        <center><h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Frontend Edit
        </h2></center>
    </x-slot>

        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('tasks.update', $task->id) }}">
                    @csrf
                    @method('PUT')
                    <center><div class="alert alert-warning" role="alert">
                        You have to fill all fields in order query works!
                      </div></center>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                            <input type="text" name="title" id="title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->title }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <input type="text" name="description" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->description }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="author" class="block font-medium text-sm text-gray-700">Author</label>
                            <input type="text" name="author" id="author" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->author }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">section_1_title</label>
                            <input type="text" name="section_1_title" id="section_1_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_1_title }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_1_a1" class="block font-medium text-sm text-gray-700">section_1_span</label>
                            <input type="text" name="section_1_span" id="section_1_span" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_1_a1 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_1_paragraph" class="block font-medium text-sm text-gray-700">section_1_paragraph</label>
                            <input type="text" name="section_1_paragraph" id="section_1_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_1_paragraph }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_2_title" class="block font-medium text-sm text-gray-700">section_2_title</label>
                            <input type="text" name="section_2_title" id="section_2_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_2_title }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_2_paragraph" class="block font-medium text-sm text-gray-700">section_2_paragraph</label>
                            <input type="text" name="section_2_paragraph" id="section_2_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_2_paragraph }}" />
                            @error('section_2_paragraph')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_title" class="block font-medium text-sm text-gray-700">section_3_title</label>
                            <input type="text" name="section_3_title" id="section_3_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_title }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_paragraph" class="block font-medium text-sm text-gray-700">section_3_paragraph</label>
                            <input type="text" name="section_3_paragraph" id="section_3_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_paragraph }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_card_1" class="block font-medium text-sm text-gray-700">section_3_card_1</label>
                            <input type="text" name="section_3_card_1" id="section_3_card_1" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_1 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_card_1_p1" class="block font-medium text-sm text-gray-700">section_3_card_1_p1</label>
                            <input type="text" name="section_3_card_1_p1" id="section_3_card_1_p1" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_1_p1 }}" />
                            @error('section_3_card_1_p1')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">section_3_card_2</label>
                            <input type="text" name="section_3_card_2" id="section_3_card_2" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_2 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_card_2_p2" class="block font-medium text-sm text-gray-700">section_3_card_2_p2</label>
                            <input type="text" name="section_3_card_2_p2" id="section_3_card_2_p2" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_2_p2 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_card_3" class="block font-medium text-sm text-gray-700">section_3_card_3</label>
                            <input type="text" name="section_3_card_3" id="section_3_card_3" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_3 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">section_3_card_3_p3</label>
                            <input type="text" name="section_3_card_3_p3" id="section_3_card_3_p3" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_3_p3 }}" />
                            @error('section_3_card_3_p3')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_card_4" class="block font-medium text-sm text-gray-700">section_3_card_4</label>
                            <input type="text" name="section_3_card_4" id="section_3_card_4" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_4 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_card_4_p4" class="block font-medium text-sm text-gray-700">section_3_card_4_p4</label>
                            <input type="text" name="section_3_card_4_p4" id="section_3_card_4_p4" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_4_p4 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_card_5" class="block font-medium text-sm text-gray-700">section_3_card_5</label>
                            <input type="text" name="section_3_card_5" id="section_3_card_5" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_5 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_card_5_p5" class="block font-medium text-sm text-gray-700">section_3_card_5_p5</label>
                            <input type="text" name="section_3_card_5_p5" id="section_3_card_5_p5" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_5_p5 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_3_card_6" class="block font-medium text-sm text-gray-700">section_3_card_6</label>
                            <input type="text" name="section_3_card_6" id="section_3_card_6" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_6 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">section_3_card_6_p6</label>
                            <input type="text" name="section_3_card_6_p6" id="section_3_card_6_p6" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_3_card_6_p6 }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">section_4_title</label>
                            <input type="text" name="section_4_title" id="section_4_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_4_title }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">section_4_paragraph</label>
                            <input type="text" name="section_4_paragraph" id="section_4_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_4_paragraph }}" />
                            @error('section_4_paragraph')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">section_4_card_1_title</label>
                            <input type="text" name="section_4_card_1_title" id="section_4_card_1_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_4_card_1_title }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_4_card_1_paragraph" class="block font-medium text-sm text-gray-700">section_4_card_1_paragraph</label>
                            <input type="text" name="section_4_card_1_paragraph" id="section_4_card_1_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_4_card_1_paragraph }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">section_4_card_2_title</label>
                            <input type="text" name="section_4_card_2_title" id="section_4_card_2_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_4_card_2_title }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_4_card_2_paragraph" class="block font-medium text-sm text-gray-700">section_4_card_2_paragraph</label>
                            <input type="text" name="section_4_card_2_paragraph" id="section_4_card_2_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_4_card_2_paragraph }}" />
                            @error('section_4_card_2_paragraph')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_4_card_3_title" class="block font-medium text-sm text-gray-700">section_4_card_3_title</label>
                            <input type="text" name="section_4_card_3_title" id="section_4_card_3_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_4_card_3_title }}" />
                            @error('section_4_card_3_title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">section_4_card_3_paragraph</label>
                            <input type="text" name="section_4_card_3_paragraph" id="section_4_card_3_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_4_card_3_paragraph }}" />
                            @error('section_4_card_3_paragraph')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">section_5_title</label>
                            <input type="text" name="section_5_title" id="section_5_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_5_title }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_5_subtitle" class="block font-medium text-sm text-gray-700">section_5_subtitle</label>
                            <input type="text" name="section_5_subtitle" id="section_5_subtitle" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_5_subtitle }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="section_5_paragraph" class="block font-medium text-sm text-gray-700">section_5_paragraph</label>
                            <input type="text" name="section_5_paragraph" id="section_5_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->section_5_paragraph }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="facebook_link" class="block font-medium text-sm text-gray-700">instagram_link</label>
                            <input type="text" name="instagram_link" id="instagram_link" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->instagram_link }}" />
                            @error('facebook_link')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">whatsapp_link</label>
                            <input type="text" name="whatsapp_link" id="whatsapp_link" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->whatsapp_link }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">telegram_link</label>
                            <input type="text" name="telegram_link" id="telegram_link" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->telegram_link }}" />
                            @error('telegram_link')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">github_link</label>
                            <input type="text" name="github_link" id="github_link" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->github_link }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">footer_text</label>
                            <input type="text" name="footer_text" id="footer_text" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $task->footer_text }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
