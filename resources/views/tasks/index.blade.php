<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/buttons-design.css')}}">
</head>
<x-app-layout>
    <x-slot name="header">
        <center>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Frontend Content View
            </h2>
        </center>
    </x-slot>
    @foreach ($tasks as $task)
    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            {{-- <div class="block mb-8">
                <button type="button" class="btn btn-primary btn-lg">
                    <a href="{{ route('tasks.create') }}" class="bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">Add Task</a>
                </button>
            </div> --}}
            <center><div class="alert alert-warning" role="alert">
                You can not edit anything here it is only a view model of frontend content
              </div></center>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                    <input readonly  type="text" name="title" id="title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->title }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                    <input readonly  type="text" name="description" id="Description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->description }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">Author</label>
                    <input readonly  type="text" name="author" id="Author" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->author }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="logo" class="block font-medium text-sm text-gray-700">Logo</label>
                    <input readonly  name="logo" id="logo" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->logo }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">section_1_title</label>
                    <input readonly  type="text" name="section_1_title" id="section_1_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_1_title }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_1_a1" class="block font-medium text-sm text-gray-700">section_1_span</label>
                    <input readonly  type="text" name="section_1_span" id="section_1_span" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_1_a1 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_1_paragraph" class="block font-medium text-sm text-gray-700">section_1_paragraph</label>
                    <input readonly  type="text" name="section_1_paragraph" id="section_1_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_1_paragraph }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_2_title" class="block font-medium text-sm text-gray-700">section_2_title</label>
                    <input readonly  type="text" name="section_2_title" id="section_2_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_2_title }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_2_paragraph" class="block font-medium text-sm text-gray-700">section_2_paragraph</label>
                    <input readonly  type="text" name="section_2_paragraph" id="section_2_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_2_paragraph }}" />
                    @error('section_2_paragraph')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_title" class="block font-medium text-sm text-gray-700">section_3_title</label>
                    <input readonly  type="text" name="section_3_title" id="section_3_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_title }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_paragraph" class="block font-medium text-sm text-gray-700">section_3_paragraph</label>
                    <input readonly  type="text" name="section_3_paragraph" id="section_3_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_paragraph }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_card_1" class="block font-medium text-sm text-gray-700">section_3_card_1</label>
                    <input readonly  type="text" name="section_3_card_1" id="section_3_card_1" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_1 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_card_1_p1" class="block font-medium text-sm text-gray-700">section_3_card_1_p1</label>
                    <input readonly  type="text" name="section_3_card_1_p1" id="section_3_card_1_p1" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_1_p1 }}" />
                    @error('section_3_card_1_p1')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">section_3_card_2</label>
                    <input readonly  type="text" name="section_3_card_2" id="section_3_card_2" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_2 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_card_2_p2" class="block font-medium text-sm text-gray-700">section_3_card_2_p2</label>
                    <input readonly  type="text" name="section_3_card_2_p2" id="section_3_card_2_p2" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_2_p2 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_card_3" class="block font-medium text-sm text-gray-700">section_3_card_3</label>
                    <input readonly  type="text" name="section_3_card_3" id="section_3_card_3" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_3 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">section_3_card_3_p3</label>
                    <input readonly  type="text" name="section_3_card_3_p3" id="section_3_card_3_p3" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_3_p3 }}" />
                    @error('section_3_card_3_p3')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_card_4" class="block font-medium text-sm text-gray-700">section_3_card_4</label>
                    <input readonly  type="text" name="section_3_card_4" id="section_3_card_4" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_4 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_card_4_p4" class="block font-medium text-sm text-gray-700">section_3_card_4_p4</label>
                    <input readonly  type="text" name="section_3_card_4_p4" id="section_3_card_4_p4" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_4_p4 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_card_5" class="block font-medium text-sm text-gray-700">section_3_card_5</label>
                    <input readonly  type="text" name="section_3_card_5" id="section_3_card_5" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_5 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_card_5_p5" class="block font-medium text-sm text-gray-700">section_3_card_5_p5</label>
                    <input readonly  type="text" name="section_3_card_5_p5" id="section_3_card_5_p5" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_5_p5 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_3_card_6" class="block font-medium text-sm text-gray-700">section_3_card_6</label>
                    <input readonly  type="text" name="section_3_card_6" id="section_3_card_6" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_6 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">section_3_card_6_p6</label>
                    <input readonly  type="text" name="section_3_card_6_p6" id="section_3_card_6_p6" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_3_card_6_p6 }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">section_4_title</label>
                    <input readonly  type="text" name="section_4_title" id="section_4_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_4_title }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">section_4_paragraph</label>
                    <input readonly  type="text" name="section_4_paragraph" id="section_4_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_4_paragraph }}" />
                    @error('section_4_paragraph')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">section_4_card_1_title</label>
                    <input readonly  type="text" name="section_4_card_1_title" id="section_4_card_1_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_4_card_1_title }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_4_card_1_paragraph" class="block font-medium text-sm text-gray-700">section_4_card_1_paragraph</label>
                    <input readonly  type="text" name="section_4_card_1_paragraph" id="section_4_card_1_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_4_card_1_paragraph }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">section_4_card_2_title</label>
                    <input readonly  type="text" name="section_4_card_2_title" id="section_4_card_2_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_4_card_2_title }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_4_card_2_paragraph" class="block font-medium text-sm text-gray-700">section_4_card_2_paragraph</label>
                    <input readonly  type="text" name="section_4_card_2_paragraph" id="section_4_card_2_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_4_card_2_paragraph }}" />
                    @error('section_4_card_2_paragraph')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_4_card_3_title" class="block font-medium text-sm text-gray-700">section_4_card_3_title</label>
                    <input readonly  type="text" name="section_4_card_3_title" id="section_4_card_3_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_4_card_3_title }}" />
                    @error('section_4_card_3_title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">section_4_card_3_paragraph</label>
                    <input readonly  type="text" name="section_4_card_3_paragraph" id="section_4_card_3_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_4_card_3_paragraph }}" />
                    @error('section_4_card_3_paragraph')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">section_5_title</label>
                    <input readonly  type="text" name="section_5_title" id="section_5_title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_5_title }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_5_subtitle" class="block font-medium text-sm text-gray-700">section_5_subtitle</label>
                    <input readonly  type="text" name="section_5_subtitle" id="section_5_subtitle" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_5_subtitle }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="section_5_paragraph" class="block font-medium text-sm text-gray-700">section_5_paragraph</label>
                    <input readonly  type="text" name="section_5_paragraph" id="section_5_paragraph" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->section_5_paragraph }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="facebook_link" class="block font-medium text-sm text-gray-700">instagram_link</label>
                    <input readonly  type="text" name="instagram_link" id="instagram_link" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->instagram_link }}" />
                    @error('facebook_link')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">whatsapp_link</label>
                    <input readonly  type="text" name="whatsapp_link" id="whatsapp_link" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->whatsapp_link }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">telegram_link</label>
                    <input readonly  type="text" name="telegram_link" id="telegram_link" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->telegram_link }}" />
                    @error('telegram_link')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">github_link</label>
                    <input readonly  type="text" name="github_link" id="github_link" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->github_link }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="title" class="block font-medium text-sm text-gray-700">footer_text</label>
                    <input readonly  type="text" name="footer_text" id="footer_text" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value="{{ $task->footer_text }}" />
                    @error('title')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
            <div class="relocation">
                <div class="buttons-design">
                    <table class="min-w-full divide-y divide-gray-200 w-full">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            {{-- <button type="button" class="btn btn-success btn-lg">
                                <a href="{{ route('tasks.show', $task->id) }}" class="">View</a>
                            </button> --}}
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                            <form class="inline-block" action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                <input readonly  type="hidden" name="_method" value="DELETE">
                                <input readonly  type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="button" class="btn btn-danger btn-lg">
                                    <input readonly  type="submit" style="background-color:transparent;" value="Delete">
                                </button>
                            </form>


                        </td>
                        </tr>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
</x-app-layout>
</div>
