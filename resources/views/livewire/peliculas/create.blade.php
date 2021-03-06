<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear nueva pelicula</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="gen_id">Genero</label>
                <select wire:model="gen_id" name="gen_id" id="gen_id" class="form-control">
                <option value="1" selected>Seleccione una opción</option>
                    @foreach($generos as $gen_id=>$gen_nombre)
							<option value={{$gen_id}}>{{$gen_nombre}}</option>
					@endforeach
                </select>@error('gen_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group">
                <label for="dir_id">Director</label>
                <!-- <input wire:model="dir_id" type="text" class="form-control" id="dir_id" placeholder="Dir Id">@error('dir_id') <span class="error text-danger">{{ $message }}</span> @enderror -->
                <select wire:model="dir_id" name="dir_id" id="dir_id" class="form-control">
                <option value="1" selected>Seleccione una opción</option>
                    @foreach($directores as $dir_id=>$dir_nombre)
							<option value={{$dir_id}}>{{$dir_nombre}}</option>
					@endforeach
                </select>@error('dir_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
            <label for="for_id">Formato</label>
            <select wire:model="for_id" name="for_id" id="for_id" class="form-control">
                <option value="1" selected>Seleccione una opción</option>
                    @foreach($formatos as $for_id=>$for_nombre)
							<option value={{$for_id}}>{{$for_nombre}}</option>
					@endforeach
                </select>@error('for_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group">
                <label for="pel_nombre">Nombre Pelicula</label>
                <input wire:model="pel_nombre" type="text" class="form-control" id="pel_nombre" placeholder="Nombre Pelicula">@error('pel_nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="pel_costo">Costo</label>
                <input wire:model="pel_costo" type="text" class="form-control" id="pel_costo" placeholder="Costo">@error('pel_costo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="pel_fecha_estreno">Fecha de Estreno</label>
                <input wire:model="pel_fecha_estreno" type="date" class="form-control" id="pel_fecha_estreno" placeholder="Fecha Estreno">@error('pel_fecha_estreno') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <!--div class="form-group">
                <label for="imagen"></label>
                <input wire:model="imagen" class="form-control" type="file" id="imagen" accept=".jpg,.png">@error('imagen') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>-->
            <div class="form-group">
                <label for="exampleInputFile">Imagen</label>
                <div class="input-group">
                  <div class="custom-file">
                     <input wire:model="imagen" type="file" class="custom-file-input"  id="imagen" accept=".jpg,.png">@error('imagen') <span class="error text-danger">{{ $message }}</span> @enderror
                     <label class="custom-file-label" for="imagen">@if($imagen){{$imagen}}@else Escoge un archivo @endif</label>
                  </div>
                </div>
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-danger close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>
