<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h1>
        Automated hospital car
      </h1>
    </div>
    <p>
      Tras analizar el día a día de un hospital, hemos llegado a la conclusión de que los enfermeros  y enfermeras realizan un sobreesfuerzo físico al tener que transportar los carros medicinales por todo el complejo. Para contrarrestar esta situación, hemps creado un sistema de transporte automatizado que se encarga de realizar dicha función sin ninguna otra necesidad del enfermero que la de pulsar en una pantalla táctil.
    </p>
    <p>
      El funcionamiento es el siguiente: el carro tiene acoplada una pantalla táctil sobre la que tiene que trabajar el enfermero. En esta interfaz el enfermero tiene que escoger la habitación a la que quiere que el carro se desplace. Este vehículo se guía mediante líneas que están pintadas en el suelo, hasta que llega a dicho destino. Una vez llega a una habitación, el trabajador puede ver en la pantalla la información de los pacientes alojados allí, así como su tratamiento. Después de terminar con los pacientes de una habitación, el enfermero informa de las modificaciones hechas en cuanto al uso de los medicamentos mediante la pantalla del carro, en la que finalmente tiene que firmar para garantizar la autorización de la tarea finalizada.
    </p>
    <form role="form" action="{{route('message.store')}}" method="post">
      @csrf
      <div class="form-group">

        <label for="name">
          Name
        </label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
      <div class="form-group">

        <label for="email">
          Email address
        </label>
        <input type="email" class="form-control" name="email" id="email">
      </div>
      <div class="form-group">

        <label for="message">
          Message
        </label>
        <textarea class="form-control" name="message" id="message"></textarea>
      </div>
      <button type="submit" class="btn submit">
        Send message
      </button>
    </form>
  </div>
</div>
