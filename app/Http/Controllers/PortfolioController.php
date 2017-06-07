<?php

namespace App\Http\Controllers;

class PortfolioController extends BaseController
{
    public function landing()
    {
        $bindings = array();

        $bindings['TopTitle'] = 'Portfolio';

        return view('portfolio.landing', $bindings);
    }

    public function projectPage($company, $project)
    {
        $bindings = array();

        $bindings['TopTitle'] = 'Portfolio';

        $pdcProjects = array(
            'admin-screens',
            'aws-migration',
            'new-ordering-wizard',
            'online-invoicing',
            'online-payments',
            'rebranding',
            'snapshot',
            'wedding-collection',
        );

        $camProjects = array(
            'homepage-category-redesign-2015-03',
        );

        switch ($company) {
            case 'printed-com':
                if (!in_array($project, $pdcProjects)) {
                    abort(404);
                }
                break;
            case 'city-am':
                if (!in_array($project, $camProjects)) {
                    abort(404);
                }
                break;
            default:
                abort(404);
        }

        // if we get to here, the path should be ok
        // so we can pass it to the project page for rendering
        $bindings['ProjectPath'] = sprintf('portfolio/%s/%s/', $company, $project);

        return view('portfolio.project-page', $bindings);
    }
}
