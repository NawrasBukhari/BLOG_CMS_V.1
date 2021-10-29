<head>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>
<x-app-layout>
    <x-slot name="header">
            <a href="{{ route('AdminCrud.create') }} " class= "btn btn-success " style="position: relative; padding-bottom: 10px; " >Create Product</a>
        <br /> <br />
        <div class="container-xl" style="padding-bottom: 16px; ">
            {{-- Display message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @foreach ($AdminCrud as $change) {{-- Loop products --}}
                {{-- <th scope="row">{{ $loop->iteration }} --}}
            <div class="container-md" style="border:1px solid #cecece; background: 	#fffafa;">
              <label>ID</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly  value="{{ $change -> id}}">
              </div>

              <label>Title</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> title}}">
              </div>

              <label>Description</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> description }}">
              </div>

              <label>Author</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> author }}">
              </div>

              <label>Logo</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> logo }}">
              </div>

              <label>section_1_title</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_1_title }}">
              </div>

              <label>section_1_span</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_1_span }}">
              </div>

              <label>section_1_a1</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_1_a1}}">
              </div>

              <label>section_1_paragraph</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_1_paragraph }}">
              </div>

              <label>section_2_title</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_2_title }}">
              </div>

              <label>section_2_paragraph</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_2_paragraph}}">
              </div>

              <label>section_3_title</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_title}}">
              </div>

              <label>section_3_paragraph</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_paragraph}}">
              </div>

              <label>section_3_card_1</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_1}}">
              </div>

              <label>section_3_card_1_p1</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_1_p1}}">
              </div>

              <label>section_3_card_2</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_2}}">
              </div>

              <label>section_3_card_2_p2</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_2_p2}}">
              </div>

              <label>section_3_card_3</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_3}}">
              </div>

              <label>section_3_card_3_p3</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_3_p3}}">
              </div>

              <label>section_3_card_4</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_4}}">
              </div>

              <label>section_3_card_4_p4</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_4_p4}}">
              </div>

              <label>section_3_card_5</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_5}}">
              </div>

              <label>section_3_card_5_p5</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_5_p5}}">
              </div>

              <label>section_3_card_6</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_6}}">
              </div>

              <label>section_3_card_6_p6</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_3_card_6_p6}}">
              </div>

              <label>section_4_title</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_4_title}}">
              </div>

              <label>section_4_paragraph</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_4_paragraph}}">
              </div>

              <label>section_4_card_1_title</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_4_card_1_title}}">
              </div>

              <label>section_4_card_1_paragraph</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_4_card_1_paragraph}}">
              </div>

              <label>section_4_card_2_title</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_4_card_2_title}}">
              </div>

              <label>section_4_card_2_paragraph</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_4_card_2_paragraph}}">
              </div>

              <label>section_4_card_3_title</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_4_card_3_title}}">
              </div>

              <label>section_4_card_3_paragraph</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_4_card_3_paragraph}}">
              </div>

              <label>section_5_title</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_5_title}}">
              </div>

              <label>section_5_subtitle</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_5_subtitle}}">
              </div>

              <label>section_5_paragraph</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> section_5_paragraph}}">
              </div>

              <label>Instagram_link</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> facebook_link}}">
              </div>

              <label>whatsapp_link</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> whatsapp_link}}">
              </div>

              <label>telegram_link</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> telegram_link}}">
              </div>

              <label>github_link</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> github_link}}">
              </div>

              <label>footer_text</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> footer_text}}">
              </div>
              <label>Created at</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> created_at}}">
              </div>
              <label>Updated at</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" readonly value="{{ $change -> updated_at}}">
              </div>
            </div>
            <br /> <br />
            <a class="btn btn-danger" href="{{ route('AdminCrud.show', $change->id) }}">View</a>
            <a class="btn btn-danger" href="{{ route('AdminCrud.edit', $change->id) }}">Edit</a> <br /><br />
            <form  action="{{ route('AdminCrud.destroy', $change->id) }}"
                method="post"> {{-- Delete --}}
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endforeach
    </x-slot>


</x-app-layout>
