<h1>Products Update</h1>
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

<form action="{{ route('AdminCrud.update') }}" method="post">
    @csrf
    @method('put')
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

    <label>facebook_link</label>
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

    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>
