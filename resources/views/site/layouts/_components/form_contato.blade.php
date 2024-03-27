{{ $slot }}

<form action={{ route('site.contato')}} method="post">
                    @csrf
                    <input name ="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
                    <br>
                    <input name ="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
                    <br>
                    <input name ="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
                    <br>
                    
                    <select name ="motivo_contato" class="{{ $classe }}">

                    
                    @foreach ($motivo_contatos as $key => $motivo_contato)
                        <option value="{{$motivo_contato->id}}" {{old('motivo_contato') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}} </option>
                        
                    @endforeach
                       
                   </select>
                    <br>
                    <textarea name ="mensagem" class="{{ $classe }}">
                        @if (old('mensagem')  != '')
                            {{ old('mensagem') }}
                        @else
                            Preencha aqui a sua mensagem
                        @endif
                    </textarea>
                    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

<prev>
{{ print_r($errors)}}
</prev>