<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $cidades = [
            // Acre
            ["nome_cidade" => "Rio Branco", "estado_id" => "1"],
            ["nome_cidade" => "Cruzeiro do Sul", "estado_id" => "1"],
            ["nome_cidade" => "Senador Guiomard", "estado_id" => "1"],
            ["nome_cidade" => "Tarauacá", "estado_id" => "1"],
            ["nome_cidade" => "Brasileia", "estado_id" => "1"],
        
            // Alagoas
            ["nome_cidade" => "Maceió", "estado_id" => "2"],
            ["nome_cidade" => "Arapiraca", "estado_id" => "2"],
            ["nome_cidade" => "Palmeira dos Índios", "estado_id" => "2"],
            ["nome_cidade" => "Rio Largo", "estado_id" => "2"],
            ["nome_cidade" => "Penedo", "estado_id" => "2"],
        
            // Amapá
            ["nome_cidade" => "Macapá", "estado_id" => "3"],
            ["nome_cidade" => "Santana", "estado_id" => "3"],
            ["nome_cidade" => "Laranjal do Jari", "estado_id" => "3"],
            ["nome_cidade" => "Oiapoque", "estado_id" => "3"],
            ["nome_cidade" => "Mazagão", "estado_id" => "3"],
        
            // Amazonas
            ["nome_cidade" => "Manaus", "estado_id" => "4"],
            ["nome_cidade" => "Parintins", "estado_id" => "4"],
            ["nome_cidade" => "Itacoatiara", "estado_id" => "4"],
            ["nome_cidade" => "Manacapuru", "estado_id" => "4"],
            ["nome_cidade" => "Tabatinga", "estado_id" => "4"],
        
            // Bahia
            ["nome_cidade" => "Salvador", "estado_id" => "5"],
            ["nome_cidade" => "Feira de Santana", "estado_id" => "5"],
            ["nome_cidade" => "Vitória da Conquista", "estado_id" => "5"],
            ["nome_cidade" => "Camaçari", "estado_id" => "5"],
            ["nome_cidade" => "Ilhéus", "estado_id" => "5"],
        
            // Ceará
            ["nome_cidade" => "Fortaleza", "estado_id" => "6"],
            ["nome_cidade" => "Caucaia", "estado_id" => "6"],
            ["nome_cidade" => "Juazeiro do Norte", "estado_id" => "6"],
            ["nome_cidade" => "Maracanaú", "estado_id" => "6"],
            ["nome_cidade" => "Sobral", "estado_id" => "6"],
        
            // Distrito Federal
            ["nome_cidade" => "Brasília", "estado_id" => "7"],
            ["nome_cidade" => "Gama", "estado_id" => "7"],
            ["nome_cidade" => "Taguatinga", "estado_id" => "7"],
            ["nome_cidade" => "Ceilândia", "estado_id" => "7"],
            ["nome_cidade" => "Samambaia", "estado_id" => "7"],
        
            // Espírito Santo
            ["nome_cidade" => "Vitória", "estado_id" => "8"],
            ["nome_cidade" => "Vila Velha", "estado_id" => "8"],
            ["nome_cidade" => "Serra", "estado_id" => "8"],
            ["nome_cidade" => "Cariacica", "estado_id" => "8"],
            ["nome_cidade" => "Guarapari", "estado_id" => "8"],
        
            // Goiás
            ["nome_cidade" => "Goiânia", "estado_id" => "9"],
            ["nome_cidade" => "Aparecida de Goiânia", "estado_id" => "9"],
            ["nome_cidade" => "Anápolis", "estado_id" => "9"],
            ["nome_cidade" => "Luziânia", "estado_id" => "9"],
            ["nome_cidade" => "Rio Verde", "estado_id" => "9"],
        
            // Maranhão
            ["nome_cidade" => "São Luís", "estado_id" => "10"],
            ["nome_cidade" => "Imperatriz", "estado_id" => "10"],
            ["nome_cidade" => "Açailândia", "estado_id" => "10"],
            ["nome_cidade" => "Caxias", "estado_id" => "10"],
            ["nome_cidade" => "Bacabal", "estado_id" => "10"],
        
            // Mato Grosso
            ["nome_cidade" => "Cuiabá", "estado_id" => "11"],
            ["nome_cidade" => "Várzea Grande", "estado_id" => "11"],
            ["nome_cidade" => "Rondonópolis", "estado_id" => "11"],
            ["nome_cidade" => "Sinop", "estado_id" => "11"],
            ["nome_cidade" => "Tangará da Serra", "estado_id" => "11"],
        
            // Mato Grosso do Sul
            ["nome_cidade" => "Campo Grande", "estado_id" => "12"],
            ["nome_cidade" => "Dourados", "estado_id" => "12"],
            ["nome_cidade" => "Três Lagoas", "estado_id" => "12"],
            ["nome_cidade" => "Corumbá", "estado_id" => "12"],
            ["nome_cidade" => "Ponta Porã", "estado_id" => "12"],
        
            // Minas Gerais
            ["nome_cidade" => "Belo Horizonte", "estado_id" => "13"],
            ["nome_cidade" => "Uberlândia", "estado_id" => "13"],
            ["nome_cidade" => "Contagem", "estado_id" => "13"],
            ["nome_cidade" => "Juiz de Fora", "estado_id" => "13"],
            ["nome_cidade" => "Betim", "estado_id" => "13"],
        
            // Pará
            ["nome_cidade" => "Belém", "estado_id" => "14"],
            ["nome_cidade" => "Ananindeua", "estado_id" => "14"],
            ["nome_cidade" => "Santarém", "estado_id" => "14"],
            ["nome_cidade" => "Marabá", "estado_id" => "14"],
            ["nome_cidade" => "Altamira", "estado_id" => "14"],
        
            // Paraíba
            ["nome_cidade" => "João Pessoa", "estado_id" => "15"],
            ["nome_cidade" => "Campina Grande", "estado_id" => "15"],
            ["nome_cidade" => "Patos", "estado_id" => "15"],
            ["nome_cidade" => "Santa Rita", "estado_id" => "15"],
            ["nome_cidade" => "Bayeux", "estado_id" => "15"],
        
            // Paraná
            ["nome_cidade" => "Curitiba", "estado_id" => "16"],
            ["nome_cidade" => "Londrina", "estado_id" => "16"],
            ["nome_cidade" => "Maringá", "estado_id" => "16"],
            ["nome_cidade" => "Ponta Grossa", "estado_id" => "16"],
            ["nome_cidade" => "Cascavel", "estado_id" => "16"],
        
            // Pernambuco
            ["nome_cidade" => "Recife", "estado_id" => "17"],
            ["nome_cidade" => "Olinda", "estado_id" => "17"],
            ["nome_cidade" => "Jaboatão dos Guararapes", "estado_id" => "17"],
            ["nome_cidade" => "Caruaru", "estado_id" => "17"],
            ["nome_cidade" => "Petrolina", "estado_id" => "17"],
        
            // Piauí
            ["nome_cidade" => "Teresina", "estado_id" => "18"],
            ["nome_cidade" => "Parnaíba", "estado_id" => "18"],
            ["nome_cidade" => "Picos", "estado_id" => "18"],
            ["nome_cidade" => "Floriano", "estado_id" => "18"],
            ["nome_cidade" => "Oeiras", "estado_id" => "18"],
        
            // Rio de Janeiro
            ["nome_cidade" => "Rio de Janeiro", "estado_id" => "19"],
            ["nome_cidade" => "Niterói", "estado_id" => "19"],
            ["nome_cidade" => "Duque de Caxias", "estado_id" => "19"],
            ["nome_cidade" => "Nova Iguaçu", "estado_id" => "19"],
            ["nome_cidade" => "Cabo Frio", "estado_id" => "19"],
        
            // Rio Grande do Norte
            ["nome_cidade" => "Natal", "estado_id" => "20"],
            ["nome_cidade" => "Mossoró", "estado_id" => "20"],
            ["nome_cidade" => "Parnamirim", "estado_id" => "20"],
            ["nome_cidade" => "Caicó", "estado_id" => "20"],
            ["nome_cidade" => "Currais Novos", "estado_id" => "20"],
        
            // Rio Grande do Sul
            ["nome_cidade" => "Porto Alegre", "estado_id" => "21"],
            ["nome_cidade" => "Caxias do Sul", "estado_id" => "21"],
            ["nome_cidade" => "Pelotas", "estado_id" => "21"],
            ["nome_cidade" => "Santa Maria", "estado_id" => "21"],
            ["nome_cidade" => "Gravataí", "estado_id" => "21"],
        
            // Rondônia
            ["nome_cidade" => "Porto Velho", "estado_id" => "22"],
            ["nome_cidade" => "Ji-Paraná", "estado_id" => "22"],
            ["nome_cidade" => "Vilhena", "estado_id" => "22"],
            ["nome_cidade" => "Ariquemes", "estado_id" => "22"],
            ["nome_cidade" => "Cacoal", "estado_id" => "22"],
        
            // Roraima
            ["nome_cidade" => "Boa Vista", "estado_id" => "23"],
            ["nome_cidade" => "Rorainópolis", "estado_id" => "23"],
            ["nome_cidade" => "Caracaraí", "estado_id" => "23"],
            ["nome_cidade" => "Iranduba", "estado_id" => "23"],
            ["nome_cidade" => "Pacaraima", "estado_id" => "23"],
        
            // Santa Catarina
            ["nome_cidade" => "Florianópolis", "estado_id" => "24"],
            ["nome_cidade" => "Joinville", "estado_id" => "24"],
            ["nome_cidade" => "Blumenau", "estado_id" => "24"],
            ["nome_cidade" => "São José", "estado_id" => "24"],
            ["nome_cidade" => "Chapecó", "estado_id" => "24"],
        
            // São Paulo
            ["nome_cidade" => "São Paulo", "estado_id" => "25"],
            ["nome_cidade" => "Campinas", "estado_id" => "25"],
            ["nome_cidade" => "São Bernardo do Campo", "estado_id" => "25"],
            ["nome_cidade" => "Santos", "estado_id" => "25"],
            ["nome_cidade" => "São José dos Campos", "estado_id" => "25"],
        
            // Sergipe
            ["nome_cidade" => "Aracaju", "estado_id" => "26"],
            ["nome_cidade" => "Nossa Senhora do Socorro", "estado_id" => "26"],
            ["nome_cidade" => "Lagarto", "estado_id" => "26"],
            ["nome_cidade" => "Itabaiana", "estado_id" => "26"],
            ["nome_cidade" => "Estância", "estado_id" => "26"],
        
            // Tocantins
            ["nome_cidade" => "Palmas", "estado_id" => "27"],
            ["nome_cidade" => "Araguaína", "estado_id" => "27"],
            ["nome_cidade" => "Gurupi", "estado_id" => "27"],
            ["nome_cidade" => "Porto Nacional", "estado_id" => "27"],
            ["nome_cidade" => "Paraíso do Tocantins", "estado_id" => "27"],
        ];
        
        foreach($cidades as $cidade){
            if(!Cidade::where('nome_cidade', $cidade['nome_cidade'])
                ->where('estado_id', $cidade['estado_id'])
                ->exists()
                ){
                Cidade::insert($cidade);    
            }
        }
    }
}
