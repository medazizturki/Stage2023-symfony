<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Form\CoachType;
use App\Repository\CoachRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/coach')]
class CoachController extends AbstractController
{
    #[Route('/', name: 'app_coach_index', methods: ['GET'])]
    public function index(CoachRepository $coachRepository , Request $request , PaginatorInterface $paginator): Response
    {

        $coaches = $coachRepository->findBy([], ['nom' => 'ASC']);
    
        $pagination = $paginator->paginate(
            $coaches,
            $request->query->getInt('page', 1),
            7
        );

        

        return $this->render('coach/index.html.twig', [
            'coaches' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_coach_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CoachRepository $coachRepository): Response
    {
        $coach = new Coach();
        $form = $this->createForm(CoachType::class, $coach);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coachRepository->save($coach, true);

            return $this->redirectToRoute('app_coach_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('coach/new.html.twig', [
            'coach' => $coach,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coach_show', methods: ['GET'])]
    public function show(Coach $coach): Response
    {
        return $this->render('coach/show.html.twig', [
            'coach' => $coach,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_coach_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Coach $coach, CoachRepository $coachRepository): Response
    {
        $form = $this->createForm(CoachType::class, $coach);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coachRepository->save($coach, true);

            return $this->redirectToRoute('app_coach_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('coach/edit.html.twig', [
            'coach' => $coach,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coach_delete', methods: ['POST'])]
    public function delete(Request $request, Coach $coach, CoachRepository $coachRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coach->getId(), $request->request->get('_token'))) {
            $coachRepository->remove($coach, true);
        }

        return $this->redirectToRoute('app_coach_index', [], Response::HTTP_SEE_OTHER);
    }
}
