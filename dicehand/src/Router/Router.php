<?php

declare(strict_types=1);

namespace Mos\Router;

use function Mos\Functions\{
    destroySession,
    redirectTo,
    renderView,
    renderTwigView,
    sendResponse,
    url
};

/**
 * Class Router.
 */
class Router
{
    public static function dispatch(string $method, string $path): void
    {
        if ($method === "GET" && $path === "/") {
            $data = [
                "header" => "Index page",
                "message" => "Hello, this is the index page, rendered as a layout.",
            ];
            $body = renderView("layout/page.php", $data);
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/session") {
            $body = renderView("layout/session.php");
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/session/destroy") {
            destroySession();
            redirectTo(url("/session"));
            return;
        } else if ($method === "GET" && $path === "/debug") {
            $body = renderView("layout/debug.php");
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/twig") {
            $data = [
                "header" => "Twig page",
                "message" => "Hey, edit this to do it youreself!",
            ];
            $body = renderTwigView("index.html", $data);
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/some/where") {
            $data = [
                "header" => "Rainbow page",
                "message" => "Hey, edit this to do it youreself!",
            ];
            $body = renderView("layout/page.php", $data);
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/dice") {

            $callable = new \Korvin1337\Dice\Game();
            $callable->playGame();

            return;
        } else if ($method === "POST" && $path === "/dice") {

            $callable = new \Korvin1337\Dice\Game();
            $callable->playGame();

            return;
        } else if ($method === "GET" && $path === "/dicehand") {

            $callable = new \Korvin1337\DiceHand\Game();
            $callable->playGame();

            return;
        } else if ($method === "POST" && $path === "/dicehand") {

            $callable = new \Korvin1337\DiceHand\Game();
            $callable->playGame();

            return;
        } else if ($method === "GET" && $path === "/graphicaldice") {

            $callable = new \Korvin1337\GraphicalDice\Game();
            $callable->playGame();

            return;
        } else if ($method === "POST" && $path === "/graphicaldice") {

            $callable = new \Korvin1337\GraphicalDice\Game();
            $callable->playGame();

            return;
        } else if ($method === "GET" && $path === "/game21") {

            $callable = new \Korvin1337\Game21\Game();
            $callable->playGame();

            return;
        } else if ($method === "POST" && $path === "/game21") {

            $callable = new \Korvin1337\Game21\Game();
            $callable->playGame();

            return;
        } else if ($method === "POST" && $path === "/game21playone") {

            $callable = new \Korvin1337\Game21PlayOne\Game();
            $callable->playGame();

            return;
        } else if ($method === "GET" && $path === "/game21playone") {

            $callable = new \Korvin1337\Game21PlayOne\Game();
            $callable->playGame();

            return;
        }else if ($method === "POST" && $path === "/game21playtwo") {

            $callable = new \Korvin1337\Game21PlayTwo\Game();
            $callable->playGame();

            return;
        } else if ($method === "GET" && $path === "/game21playtwo") {

            $callable = new \Korvin1337\Game21PlayTwo\Game();
            $callable->playGame();

            return;
        }
        $data = [
            "header" => "404",
            "message" => "The page you are requesting is not here. You may also checkout the HTTP response code, it should be 404.",
        ];
        $body = renderView("layout/page.php", $data);
        sendResponse($body, 404);
    }
}
