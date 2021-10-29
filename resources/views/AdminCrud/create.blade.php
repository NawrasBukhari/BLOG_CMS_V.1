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
<h1>Products Create</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container-xl" style="padding-bottom: 16px; ">

<form action="{{ route('AdminCrud.store') }}" method="POST">
    @csrf
    <label>ID</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"    value="{{ $change -> id}}">
    </div>

    <label>Title</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> title}}">
    </div>

    <label>Description</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> description }}">
    </div>

    <label>Author</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> author }}">
    </div>

    <label>Logo</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> logo }}">
    </div>

    <label>section_1_title</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_1_title }}">
    </div>

    <label>section_1_span</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_1_span }}">
    </div>

    <label>section_1_a1</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_1_a1}}">
    </div>

    <label>section_1_paragraph</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_1_paragraph }}">
    </div>

    <label>section_2_title</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_2_title }}">
    </div>

    <label>section_2_paragraph</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_2_paragraph}}">
    </div>

    <label>section_3_title</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_title}}">
    </div>

    <label>section_3_paragraph</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_paragraph}}">
    </div>

    <label>section_3_card_1</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_1}}">
    </div>

    <label>section_3_card_1_p1</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_1_p1}}">
    </div>

    <label>section_3_card_2</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_2}}">
    </div>

    <label>section_3_card_2_p2</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_2_p2}}">
    </div>

    <label>section_3_card_3</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_3}}">
    </div>

    <label>section_3_card_3_p3</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_3_p3}}">
    </div>

    <label>section_3_card_4</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_4}}">
    </div>

    <label>section_3_card_4_p4</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_4_p4}}">
    </div>

    <label>section_3_card_5</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_5}}">
    </div>

    <label>section_3_card_5_p5</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_5_p5}}">
    </div>

    <label>section_3_card_6</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_6}}">
    </div>

    <label>section_3_card_6_p6</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_3_card_6_p6}}">
    </div>

    <label>section_4_title</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_4_title}}">
    </div>

    <label>section_4_paragraph</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_4_paragraph}}">
    </div>

    <label>section_4_card_1_title</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_4_card_1_title}}">
    </div>

    <label>section_4_card_1_paragraph</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_4_card_1_paragraph}}">
    </div>

    <label>section_4_card_2_title</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_4_card_2_title}}">
    </div>

    <label>section_4_card_2_paragraph</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_4_card_2_paragraph}}">
    </div>

    <label>section_4_card_3_title</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_4_card_3_title}}">
    </div>

    <label>section_4_card_3_paragraph</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_4_card_3_paragraph}}">
    </div>

    <label>section_5_title</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_5_title}}">
    </div>

    <label>section_5_subtitle</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_5_subtitle}}">
    </div>

    <label>section_5_paragraph</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> section_5_paragraph}}">
    </div>

    <label>facebook_link</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> facebook_link}}">
    </div>

    <label>whatsapp_link</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> whatsapp_link}}">
    </div>

    <label>telegram_link</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control"   value="{{ $change -> telegram_link}}">
    </div>
    <label>Created at</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control"  value="{{ $change -> created_at}}">
    </div>

    <label>Updated at</label>
        <div class="input-group mb-3">
        <input type="text" class="form-control"  value="{{ $change -> updated_at}}">
        </div>



    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>
</div>
</x-slot>


</x-app-layout>
