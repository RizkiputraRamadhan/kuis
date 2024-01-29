@extends('layouts.app')
@section('content')
    <form method="POST" action="/survey">
        @csrf
        <div class="form-pertanyaan">
            <h3 class="title-kuisoner">Pertanyaan Kuisoner</h3>
            <b>Nama : {{ session('nama') }}</b>
            <input type="text" name="namaKomsumen" class="d-none" value={{ session('nama') }}>
            <hr />
            <table class="table-striped table">
                <thead>
                    <tr>
                        <td class="font-bold" scope="col">No</td>
                        <td class="font-bold" scope="col">Pertanyaan</td>
                        <td class="table-warning font-bold"; colspan="5">Persepsi</td>
                        <td class="table-warning font-bold"; colspan="5">Harapan</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="table-danger  font-bold font-bold">Tangible</td>
                        <td class="font-bold">STP</td>
                        <td class="font-bold">TP</td>
                        <td class="font-bold">CP</td>
                        <td class="font-bold">P</td>
                        <td class="font-bold">SP</td>
                        <td class="font-bold">STP</td>
                        <td class="font-bold">TP</td>
                        <td class="font-bold">CP</td>
                        <td class="font-bold">P</td>
                        <td class="font-bold">SP</td>
                    </tr>

                    <td></td>
                    @foreach ($tangible as $row)
                        <td class="font-medium" class="font-medium">{{ $row->pertanyaanText }}</td>
                        <td>
                            <input type="radio" id="STP-P" name="tangilbe_P{{$loop->iteration}}-{{$row->id}}" value="STP-P">
                            <label for="STP-P"></label>
                        </td>
                        <td>
                            <input type="radio" id="TP-P" name="tangilbe_P{{$loop->iteration}}-{{$row->id}}" value="TP-P">
                            <label for="TP-P"></label>
                        </td>
                        <td>
                            <input type="radio" id="CP-P" name="tangilbe_P{{$loop->iteration}}-{{$row->id}}" value="CP-P">
                            <label for="CP-P"></label>
                        </td>
                        <td>
                            <input type="radio" id="P-P" name="tangilbe_P{{$loop->iteration}}-{{$row->id}}" value="P-P">
                            <label for="P-P"></label>
                        </td>
                        <td>
                            <input type="radio" id="SP-P" name="tangilbe_P{{$loop->iteration}}-{{$row->id}}" value="SP-P">
                            <label for="SP-P"></label>
                        </td>
                        {{-- Harapan --}}
                        <td>
                            <input type="radio" id="H" name="tangible_H{{$loop->iteration}}-{{$row->id}}" value="STP-H">
                            <label for="CP-H"></label>
                        </td>
                        <td>
                            <input type="radio" id="H" name="tangible_H{{$loop->iteration}}-{{$row->id}}" value="TP-H">
                            <label for="TP-H"></label>
                        </td>
                        <td>
                            <input type="radio" id="H" name="tangible_H{{$loop->iteration}}-{{$row->id}}" value="CP-H">
                            <label for="CP-H"></label>
                        </td>
                        <td>
                            <input type="radio" id="H" name="tangible_H{{$loop->iteration}}-{{$row->id}}" value="P-H">
                            <label for="P-H"></label>
                        </td>
                        <td>
                            <input type="radio" id="H" name="tangible_H{{$loop->iteration}}-{{$row->id}}" value="SP-H">
                            <label for="SP-H"></label>
                        </td>
                        </tr>
                        <td></td>
                    @endforeach

                    <tr>
                        <td>2</td>
                        <td class="table-danger  font-bold">Reliability</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    <tr>
                        <td></td>
                        @foreach ($reliability as $row)
                            <td class="font-medium">{{ $row->pertanyaanText }}</td>
                            <td>
                                <input type="radio" id="STP-P" name="reliability_P{{$loop->iteration}}-{{$row->id}}" value="STP-P">
                                <label for="STP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-P" name="reliability_P{{$loop->iteration}}-{{$row->id}}" value="TP-P">
                                <label for="TP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="CP-P" name="reliability_P{{$loop->iteration}}-{{$row->id}}" value="CP-P">
                                <label for="CP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-P" name="reliability_P{{$loop->iteration}}-{{$row->id}}" value="P-P">
                                <label for="P-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-P" name="reliability_P{{$loop->iteration}}-{{$row->id}}" value="SP-P">
                                <label for="SP-P"></label>
                            </td>
                            {{-- Harapan --}}
                            <td>
                                <input type="radio" id="H" name="reliability_H{{$loop->iteration}}-{{$row->id}}" value="STP-H">
                                <label for="CP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="reliability_H{{$loop->iteration}}-{{$row->id}}" value="TP-H">
                                <label for="TP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="reliability_H{{$loop->iteration}}-{{$row->id}}" value="CP-H">
                                <label for="CP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="reliability_H{{$loop->iteration}}-{{$row->id}}" value="P-H">
                                <label for="P-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="reliability_H{{$loop->iteration}}-{{$row->id}}" value="SP-H">
                                <label for="SP-H"></label>
                            </td>
                    </tr>
                    <td></td>
                    @endforeach

                    <tr>
                        <td>3</td>
                        <td class="table-danger  font-bold">Responsiveness</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    <tr>
                        <td></td>
                        @foreach ($responsiveness as $row)
                            <td class="font-medium">{{ $row->pertanyaanText }}</td>
                            <td>
                                <input type="radio" id="STP-P" name="responsiveness_P{{$loop->iteration}}-{{$row->id}}" value="STP-P">
                                <label for="STP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-P" name="responsiveness_P{{$loop->iteration}}-{{$row->id}}" value="TP-P">
                                <label for="TP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="CP-P" name="responsiveness_P{{$loop->iteration}}-{{$row->id}}" value="CP-P">
                                <label for="CP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-P" name="responsiveness_P{{$loop->iteration}}-{{$row->id}}" value="P-P">
                                <label for="P-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-P" name="responsiveness_P{{$loop->iteration}}-{{$row->id}}" value="SP-P">
                                <label for="SP-P"></label>
                            </td>
                            {{-- Harapan --}}
                            <td>
                                <input type="radio" id="H" name="responsiveness_H{{$loop->iteration}}-{{$row->id}}" value="STP-H">
                                <label for="CP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="responsiveness_H{{$loop->iteration}}-{{$row->id}}" value="TP-H">
                                <label for="TP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="responsiveness_H{{$loop->iteration}}-{{$row->id}}" value="CP-H">
                                <label for="CP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="responsiveness_H{{$loop->iteration}}-{{$row->id}}" value="P-H">
                                <label for="P-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="responsiveness_H{{$loop->iteration}}-{{$row->id}}" value="SP-H">
                                <label for="SP-H"></label>
                            </td>
                    </tr>
                    <td></td>
                    @endforeach

                    <tr>
                        <td>4</td>
                        <td class="table-danger  font-bold">Assurance</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    <tr>
                        <td></td>
                        @foreach ($assurance as $row)
                            <td class="font-medium">{{ $row->pertanyaanText }}</td>
                            <td>
                                <input type="radio" id="STP-P" name="assurance_P{{$loop->iteration}}-{{$row->id}}" value="STP-P">
                                <label for="STP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-P" name="assurance_P{{$loop->iteration}}-{{$row->id}}" value="TP-P">
                                <label for="TP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="CP-P" name="assurance_P{{$loop->iteration}}-{{$row->id}}" value="CP-P">
                                <label for="CP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-P" name="assurance_P{{$loop->iteration}}-{{$row->id}}" value="P-P">
                                <label for="P-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-P" name="assurance_P{{$loop->iteration}}-{{$row->id}}" value="SP-P">
                                <label for="SP-P"></label>
                            </td>
                            {{-- Harapan --}}
                            <td>
                                <input type="radio" id="H" name="assurance_H{{$loop->iteration}}-{{$row->id}}" value="STP-H">
                                <label for="CP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="assurance_H{{$loop->iteration}}-{{$row->id}}" value="TP-H">
                                <label for="TP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="assurance_H{{$loop->iteration}}-{{$row->id}}" value="CP-H">
                                <label for="CP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="assurance_H{{$loop->iteration}}-{{$row->id}}" value="P-H">
                                <label for="P-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="assurance_H{{$loop->iteration}}-{{$row->id}}" value="SP-H">
                                <label for="SP-H"></label>
                            </td>
                    </tr>
                    <td></td>
                    @endforeach
                    <tr>
                        <td>5</td>
                        <td class="table-danger  font-bold">Emphaty</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    <tr>
                        <td></td>
                        @foreach ($emphaty as $row)
                            <td class="font-medium">{{ $row->pertanyaanText }}</td>
                            <td>
                                <input type="radio" id="STP-P" name="emphaty_P{{$loop->iteration}}-{{$row->id}}" value="STP-P">
                                <label for="STP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="TP-P" name="emphaty_P{{$loop->iteration}}-{{$row->id}}" value="TP-P">
                                <label for="TP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="CP-P" name="emphaty_P{{$loop->iteration}}-{{$row->id}}" value="CP-P">
                                <label for="CP-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="P-P" name="emphaty_P{{$loop->iteration}}-{{$row->id}}" value="P-P">
                                <label for="P-P"></label>
                            </td>
                            <td>
                                <input type="radio" id="SP-P" name="emphaty_P{{$loop->iteration}}-{{$row->id}}" value="SP-P">
                                <label for="SP-P"></label>
                            </td>
                            {{-- Harapan --}}
                            <td>
                                <input type="radio" id="H" name="emphaty_H{{$loop->iteration}}-{{$row->id}}" value="STP-H">
                                <label for="CP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="emphaty_H{{$loop->iteration}}-{{$row->id}}" value="TP-H">
                                <label for="TP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="emphaty_H{{$loop->iteration}}-{{$row->id}}" value="CP-H">
                                <label for="CP-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="emphaty_H{{$loop->iteration}}-{{$row->id}}" value="P-H">
                                <label for="P-H"></label>
                            </td>
                            <td>
                                <input type="radio" id="H" name="emphaty_H{{$loop->iteration}}-{{$row->id}}" value="SP-H">
                                <label for="SP-H"></label>
                            </td>
                    </tr>
                    <td></td>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
        </div>
    </form>

@endsection
