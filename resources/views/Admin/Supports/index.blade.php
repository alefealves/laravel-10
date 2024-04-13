<h1>Listagem dos suportes</h1>

<a href="{{ route('supports.create') }} ">Criar Dúvida</a>

<table>
  <thead>
    <th>assunto</th>
    <th>status</th>
    <th>descrição</th>
    <th></th>
  </thead>
  <tbody>
    @foreach ($supports as $support)
      <tr>
        <th>{{ $support['subject'] }}</th>
        <th>{{ $support['status'] }}</th>
        <th>{{ $support['body'] }}</th>
        <td>
          <a href="{{ route('supports.show', $support['id']) }} ">ir</a>
          <a href="{{ route('supports.edit', $support['id']) }} ">editar</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
