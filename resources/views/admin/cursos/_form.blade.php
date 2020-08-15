<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label for="">Titulo</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label for="">Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label for="">Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input type="text" class="file-path validate">
    </div>
</div>

@if(isset($registro->imagem))
    <div class="input-field">
        <img width="150px" src="{{asset($registro->imagem)}}" alt="">
    </div>
@endif

<div class="input-field">
    <p>
        <label>
            <input
                type="checkbox"
                {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : ''}}
            />
            <span>Publicar?</span>
        </label>
    </p>
</div>
