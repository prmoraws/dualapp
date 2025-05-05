<?php

namespace App\Livewire\Evento;

use App\Models\Evento\Cesta;
use App\Models\Evento\Instituicao;
use App\Models\Evento\Terreiro;
use Livewire\Component;

class Dashboard extends Component
{
    public $terreirosCount;
    public $convidadosCount;
    public $instituicoesCount;
    public $instituicoesConvidados;
    public $totalGeralTerreirosInstituicoes;
    public $totalConvidadosGeral;
    public $totalCestas;
    public $totalCestasTerreiros;
    public $totalCestasInstituicoes;
    public $blocosConvidados;
    public $blocosTerreirosCount;
    public $chartBlocosConvidados;
    public $chartCestasDistribuicao;

    public function mount()
    {
        // Contagem de Terreiros e Convidados
        $this->terreirosCount = Terreiro::count();
        $this->convidadosCount = Terreiro::sum('convidados');

        // Contagem de Instituições e Convidados
        $this->instituicoesCount = Instituicao::count();
        $this->instituicoesConvidados = Instituicao::sum('convidados');

        // Totais Gerais
        $this->totalGeralTerreirosInstituicoes = $this->terreirosCount + $this->instituicoesCount;
        $this->totalConvidadosGeral = $this->convidadosCount + $this->instituicoesConvidados;

        // Contagem de Cestas
        $this->totalCestas = Cesta::sum('cestas');
        $terreirosNomes = Terreiro::pluck('nome')->toArray();
        $this->totalCestasTerreiros = Cesta::whereIn('nome', $terreirosNomes)->distinct('nome')->count();
        $instituicoesNomes = Instituicao::pluck('nome')->toArray();
        $this->totalCestasInstituicoes = Cesta::whereIn('nome', $instituicoesNomes)->distinct('nome')->count();

        // Dados para Blocos
        $this->blocosConvidados = Terreiro::select('bloco')
            ->selectRaw('SUM(convidados) as total_convidados')
            ->groupBy('bloco')
            ->orderBy('bloco')
            ->get()
            ->pluck('total_convidados', 'bloco')
            ->toArray();

        $this->blocosTerreirosCount = Terreiro::select('bloco')
            ->selectRaw('COUNT(*) as total_terreiros')
            ->groupBy('bloco')
            ->orderBy('bloco')
            ->get()
            ->pluck('total_terreiros', 'bloco')
            ->toArray();

        // Dados para Gráficos
        $this->chartBlocosConvidados = [
            'labels' => array_keys($this->blocosConvidados),
            'data' => array_values($this->blocosConvidados),
        ];

        $this->chartCestasDistribuicao = [
            'labels' => ['Terreiros', 'Instituições'],
            'data' => [$this->totalCestasTerreiros, $this->totalCestasInstituicoes],
        ];
    }

    public function redirectTo($route)
    {
        return redirect()->route($route);
    }

    public function exportData()
    {
        // Lógica para exportação de dados (exemplo: CSV)
        // Implementar conforme necessidade
    }

    public function render()
    {
        return view('livewire.evento.dashboard');
    }
}